<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstituteSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['institute_id', 'schedule_id', 'date'];

    public function institute()
    {
        return $this->belongsTo(Institute::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
