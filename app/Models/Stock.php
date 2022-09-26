<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Stock extends Model
{
    protected $fillable = [
        'id',
        'name',
        'coordinates',
    ];

    public function stockProducts(){
        return $this->hasMany(Product::class);
    }
}
