<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufactory extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'country',
        'founded_year'
    ];
}
