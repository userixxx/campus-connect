<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ScheduleCardController extends Controller
{
    public function index()
    {
        return Inertia::render('ScheduleCard');
    }
}
