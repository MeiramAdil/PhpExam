<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class CategoryController extends Controller
{
    public function show(){
        $stocks = Stock::get();
        return $stocks;
    }
    public function create($s){
        $stock = Stock::updateOrCreate(
            ['name'=> $s->name, 
            'coordinates' => $s->coordinates,]);
        return $stock;
    }
    public function delete($id){
        try{
            $stock = Stock::findOrFail($id);
        } catch(\Exception $e){
            throw new NotFoundException;
        }
        $stock->delete();  
    }
    public function update($s){
        try{
            $stock = Stock::findOrFail($id);
        } catch(\Exception $e){
            throw new NotFoundException;
        }
        $stock =$s;
        $stock->save();
    }
}
