<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DecantController extends Controller
{
    public function index()
    {
        return Inertia::render('Decant/Index');
    }

    public function show()
    {
        return Inertia::render('Decant/Show');
    }
}
