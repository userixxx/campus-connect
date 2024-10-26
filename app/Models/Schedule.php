<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'start_time', 'end_time', 'location'];

    public function instituteSchedules()
    {
        return $this->hasMany(InstituteSchedule::class);
    }
}
