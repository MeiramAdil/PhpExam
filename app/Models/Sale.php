<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale_details;
class Sale extends Model
{
    protected $fillable = [
        'id',
        'sum',
        'sale_date',
    ];

    public function saleDetails(){
        return $this->hasMany(SaleDetails::class);
    }
}
