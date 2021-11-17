<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demand;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product', 'uni_price_product', 'barcode_product', 'qnt_product'
    ];

    public function demand() {
        return $this->hasOne(Demand::class);
    }
}
