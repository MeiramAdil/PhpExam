<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Stock;

class Product extends Model
{
    protected $fillable = [
        'id',
        'name',
        'category_id',
        'stock_id',
        'details',
        'barcode',
        'supply_price',
        'selling_price',
        'price_cheat',
    ];
    public function productsCategory(){
        return $this->belongsTo(Category::class);
    }
    public function productsStock(){
        return $this->belongsTo(Stock::class);
    }
 
}
