<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\ScheduleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Получить расписание для учебной группы пользователя.
     *
     * @OA\Get(
     *     path="/api/admin/schedule",
     *     summary="Получить расписание для пользователя",
     *     tags={"Admin Dashboard"},
     *     @OA\Parameter(
     *         name="user_id",
     *         in="query",
     *         description="ID пользователя, для которого требуется получить расписание",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Успешный ответ",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Schedule")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Ошибка сервера"
     *     )
     * )
     */
    public function index(ScheduleService $scheduleService)
    {
        try {
            $user = User::find(1);
            $schedule = $scheduleService->getScheduleForRSUE($user);

            return response()->json($schedule);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Показать форму для создания нового ресурса.
     *
     * @OA\Get(
     *     path="/api/admin/resource/create",
     *     summary="Показать форму создания ресурса",
     *     tags={"Admin Dashboard"},
     *     @OA\Response(
     *         response=200,
     *         description="Форма успешно загружена"
     *     )
     * )
     */
    public function create()
    {
        //
    }

    /**
     * Сохранить новый ресурс в хранилище.
     *
     * @OA\Post(
     *     path="/api/admin/resource",
     *     summary="Сохранить новый ресурс",
     *     tags={"Admin Dashboard"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(property="name", type="string", description="Имя ресурса")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Ресурс успешно сохранен"
     *     )
     * )
     */
    public function store(Request $request)
    {
        //
    }

    // Оставил аннотации для других методов по аналогии, если вы захотите их позже описать
}
