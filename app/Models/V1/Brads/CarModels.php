<?php

namespace App\Models\V1\Brads;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModels extends Model
{   
    
    use HasFactory;

    public function brand()
    {
        return $this->belongsTo(CarBrands::class, 'brand_id');
    }
}
