<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    protected $fillable = [
        'id',
        'name',
        'parent_id',       
    ];

    public function categoryProducts(){
        return $this->hasMany(Product::class);
    }

    protected $table = 'product_categories';

    public function ProductCategory(){
        return $this->hasMany($this, 'parent_id');
    }

    public function rootCategories(){
        return $this->where('parent_id', 0)->with('ProductCategory')->get();
    }
}