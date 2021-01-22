<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable =[
        'price',
        'quantity',
        'product_id',
        'order_id',
        'final_price'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
