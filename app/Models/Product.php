<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'supplier',
        'image',
        'barcode',
        'price',
        'quantity',
        'status'
    ];

    public function getSupplier() : hasOne
    {
        return $this->hasOne(Supplier::class, 'code', 'supplier');
    }
}
