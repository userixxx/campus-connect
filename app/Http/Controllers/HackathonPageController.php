<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HackathonPageController extends Controller
{

    public function index()
    {
        return Inertia::render('User/components/HackathonPage');
    }
}
