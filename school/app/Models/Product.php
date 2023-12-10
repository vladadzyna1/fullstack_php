<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'unit_of_measurement',
        'unit_price',
        'expiration_date',
        'quantity_in_stock',
    ];

    public $timestamps = false;
}
