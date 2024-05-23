<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Decant;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DecantController extends Controller
{
    public function index()
    {
        $decants = Decant::with('brand', 'prices.size')->paginate(21); // eager load relationships
        $brands = Brand::all();

        return Inertia::render('Decant/Index', [
            'decants' => $decants,
            'brands' =>  $brands
        ]);
    }

    public function show()
    {
        return Inertia::render('Decant/Show');
    }
}
