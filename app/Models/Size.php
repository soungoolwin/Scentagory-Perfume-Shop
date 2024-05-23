<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['size'];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function decants()
    {
        return $this->belongsToMany(Decant::class, 'prices')->withPivot('price');
    }
}
