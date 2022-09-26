<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\SaleDetails;

class SaleController extends Controller
{
    public function show(){
        $sales = Sale::with('saleDetails')->get();
        return $sales;
    }
    public function create(Sale $s, SaleDetails $sd){
        $saleDetails = SaleDetails::updateOrCreate(
            [
                'sale_id'=> $s->id,
                'product_id'=> $sd->product_id,
                'price'=>$sd->price,
            ]
        )
        $sale = Sale::updateOrCreate(
            ['sum'=> $s->sum, 
            'sale_date' => $s->sale_date,]);
        return $sale;
    }
    public function delete($id){
        try{
            $sale = Sale::With('saleDetails')->findOrFail($id);
        } catch(\Exception $e){
            throw new NotFoundException;
        }
        $sale->delete();  
    }
    public function update($s){
        try{
            $sale = Sale::findOrFail($id);
        } catch(\Exception $e){
            throw new NotFoundException;
        }
        $sale =$s;
        $sale->save();
    }
}
