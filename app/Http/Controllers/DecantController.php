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
        $search = request('search');
        $brand = request('brand');


        $decants = Decant::query()
            ->when($search, function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%');
            })
            ->when($brand, function ($query, $brand) {
                $query->whereHas('brand', function ($query) use ($brand) {
                    $query->where('name', $brand);
                });
            })
            ->with('brand', 'prices.size')
            ->paginate(21); // eager load relationships

        $brands = Brand::all();

        return Inertia::render('Decant/Index', [
            'decants' => $decants,
            'brands' => $brands
        ]);
    }

    public function show()
    {
        return Inertia::render('Decant/Show');
    }
}
