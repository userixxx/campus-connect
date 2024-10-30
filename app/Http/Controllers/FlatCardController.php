<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FlatCardController extends Controller
{
    public function index()
    {
        return Inertia::render('FlatCard');
    }
}
