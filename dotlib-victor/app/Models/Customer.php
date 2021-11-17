<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Demand;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_customer', 'cpf_customer', 'email_customer'
    ];

    public function demand() {
        return $this->hasOne(Demand::class);
    }

}
