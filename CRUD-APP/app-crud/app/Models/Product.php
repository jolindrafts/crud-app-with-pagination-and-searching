<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [ //yg akan diisi user dan harus relevan dgn col di table Product
        'name',
        'qty',
        'price',
        'description'
    ];
}
