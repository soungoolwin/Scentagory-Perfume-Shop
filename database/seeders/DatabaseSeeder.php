<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Decant;
use App\Models\Price;
use App\Models\Size;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $brands = Brand::factory(10)->create();

        $sizes = Size::factory(4)->create();

        Decant::factory(20)->create()->each(function ($decant) use ($sizes) {
            foreach ($sizes as $size) {
                Price::factory()->create([
                    'decant_id' => $decant->id,
                    'size_id' => $size->id,
                ]);
            }
        });
        //Every Decant is created, sizes are looped, and inside that loop, price is created using that decant_id and size_id from the loop.
        //It means that every decant has 4 prices, one for each size.
    }
}
