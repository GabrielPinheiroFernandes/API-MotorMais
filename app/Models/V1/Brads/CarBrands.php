<?php

namespace App\Models\V1\Brads;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrands extends Model
{
    protected $table = 'cars_brands'; 
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    
}
