<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    function add_category(){

      $categories = Category::paginate(6);
      return view('category/all_category', compact('categories'));
    }

    function insert_category(Request $request){
      
      $request->validate([
         'category_name'=>'required|unique:categories,category_name'
      ]);

      category::insert([

         'category_name' => $request->category_name,
         'created_at'   => Carbon::now('Asia/Dhaka')  
         //All time zone set  [go config/app.config/line no 70  'Asia/Dhaka']
      ]);

      return back()->with('insert', 'Category inserted successfully!');
    }
}
