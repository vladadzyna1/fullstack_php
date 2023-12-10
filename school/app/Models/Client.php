<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_identification',
        'discount_percentage',
        'payment_terms_days',
    ];
    public $timestamps = false;
    public $table='Clients';
}
