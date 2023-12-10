<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'order_date',
        'total_order_quantity',
        'total_order_cost',
        'payment_date',
        'payment_amount'
    ];

    public $timestamps = false;

    public $table='Orders';

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
