<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class ScheduleService
{
    /**
     * Base URL for RSUE schedule API.
     *
     * @var string
     */
    protected $rsueBaseUrl = 'https://rasp-api.rsue.ru/api/v1/schedule/lessons/';

    /**
     * Retrieve and format schedule for a given user's group from RSUE API.
     *
     * @param User $user User model instance containing options with 'academy_group'.
     * @return array Formatted schedule data.
     *
     * @throws \Exception if 'academy_group' is not set or if the API response is invalid.
     */
    public function getScheduleForRSUE(User $user)
    {
        $group = $user->options['academy_group'] ?? null;

        if (! $group) {
            throw new \Exception('Группа не указана для пользователя.');
        }

        $url = $this->rsueBaseUrl.urlencode($group);
        $response = Http::get($url);

        if ($response->failed()) {
            throw new \Exception('Не удалось получить расписание.');
        }

        $data = $response->json();
        if (! is_array($data) || ! isset($data['weeks'])) {
            throw new \Exception('Некорректный формат данных расписания.');
        }

        // Форматирование данных расписания с использованием приватного метода
        foreach ($data['weeks'] as &$week) {
            foreach ($week['days'] as &$day) {
                $day['pairs'] = $this->formatPairsOnRSUE($day['pairs']);
            }
        }

        return $data;
    }

    /**
     * Format pairs data for RSUE schedule.
     *
     * @param array $pairs Array of pairs data from the API.
     * @return array Formatted pairs data with subjects, teachers, and timings.
     */
    private function formatPairsOnRSUE(array $pairs)
    {
        $formattedPairs = [];

        foreach ($pairs as $pair) {
            $lessons = collect($pair['lessons'])->map(function ($lesson) use ($pair) {
                return [
                    'subject' => $lesson['subject'],
                    'teacher' => $lesson['teacher']['name'] ?? 'N/A',
                    'audience' => $lesson['audience'] ?? 'N/A',
                    'time' => "{$pair['startTime']} - {$pair['endTime']}",
                ];
            });

            $formattedPairs[] = [
                'pair_id' => $pair['id'],
                'time' => "{$pair['startTime']} - {$pair['endTime']}",
                'lessons' => $lessons->toArray(),
            ];
        }

        return $formattedPairs;
    }
}
