<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FlagBigPageController extends Controller
{
    public function index()
    {
        return Inertia::render('User/components/FlatBigPage');
    }
}