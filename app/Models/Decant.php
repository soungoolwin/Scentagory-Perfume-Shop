<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'scent_accords',
        'top_note',
        'base_note',
        'gender',
        'brand_category',
        'country',
        'brand_id'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'prices')->withPivot('price');
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
