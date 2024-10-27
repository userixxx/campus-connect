<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class UserSectionsController extends Controller
{
    public function index()
    {
        return Inertia::render('User/components/UserSections');
    }
}