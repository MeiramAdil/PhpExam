<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sale;
class SaleDetails extends Model
{
    protected $fillable = [
        'id',
        'sale_id',
        'product_id',
        'price',
    ];
    public function thisSale(){
        return $this->belongTo(Sale::class);
    }
}
