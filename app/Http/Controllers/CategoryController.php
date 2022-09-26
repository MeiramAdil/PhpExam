<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(){
        $categories = Category::get();
        return $categories;
    }
    public function create(category $c){
        $category = Category::updateOrCreate(
            ['name'=> $c->name, 
            'parent_id' => $c->parent_id,]);
        return $category;
    }
    public function delete($id){
        try{
            $category = Category::findOrFail($id);
        } catch(\Exception $e){
            throw new NotFoundException;
        }
        $category->delete();  
    }
    public function update(Category $c){
        try{
            $category = Category::findOrFail($id);
        } catch(\Exception $e){
            throw new NotFoundException;
        }
        $category =$c;
        $category->save();
    }
    public function index(Category $c){
        $rootCategories = $c->rootCategories();
        return view('layouts.catalog', ['rootCategories' => $rootCategories,]);
    }
}
