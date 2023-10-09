<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Supplier extends Model
{
    protected $fillable = [
        'code',
        'supplier_code',
        'name',
        'tin',
        'telephone',
        'address',
        'city',
        'country',
        'active',
        'created_by'
    ];

    public function getUser() : HasOne
    {
        return $this->hasOne(User::class, 'code', 'created_by');
    }
}
