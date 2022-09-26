<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function show(){
        $products = Product::get();
        return $products;
    }
    public function create($p){
        $product = Product::updateOrCreate(
            ['name'=> $p->name, 
            'category_id' => $p->category_id,
            'stock_id' => $p->stock_id,
            'details'=> $p->details,
            'barcode'=> $p->barcode,
            'supply_price'=> $p->supply_price,
            'selling_price'=> $p->selling_price,
            'price_cheat'=> $p->price_cheat]);
        return $product;
    }
    public function delete($id){
        try{
            $product = Product::findOrFail($id);
        } catch(\Exception $e){
            throw new NotFoundException;
        }
        $product->delete();  
    }
    public function update($p){
        try{
            $product = Product::findOrFail($id);
        } catch(\Exception $e){
            throw new NotFoundException;
        }
        $product =$p;
        $product->save();
    }
}
