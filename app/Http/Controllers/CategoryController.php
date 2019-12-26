<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Carbon\Carbon;

class CategoryController extends Controller{

    function add_category(){

      $categories = Category::paginate(6);
      return view('category/all_category', compact('categories'));
    }

    function insert_category(Request $request){
    
      $request->validate([
         'category_name'=>'required|unique:categories,category_name'
      ]);
      if (isset($request->menu_status)) {
         
         category::insert([
            'category_name' => $request->category_name,
            'menu_status' => true,
            'created_at'   => Carbon::now('Asia/Dhaka')  
            //All time zone set  [go config/app.config/line no 70  'Asia/Dhaka']
         ]);
      }else{
         category::insert([
            'category_name' => $request->category_name,
            'menu_status' => false,
            'created_at'   => Carbon::now('Asia/Dhaka')  
            //All time zone set  [go config/app.config/line no 70  'Asia/Dhaka']
         ]);
      }
      return back()->with('insert', 'Category inserted successfully!');
   }

   function change_category($category_id) {
      // 1st way...

      // if(Category::find($category_id)->menu_status==0){
      //    Category::find($category_id)->update([
      //       "menu_status" => true
      //    ]);
      // }else{
      //    Category::find($category_id)->update([
      //       "menu_status" => false
      //    ]);
      // }

      // 2nd way...
      $category_info = Category::find($category_id);
         
         if ($category_info->menu_status == 0) {
            $category_info->menu_status = true;
         }else{
            $category_info->menu_status = false;
         }
      
      $category_info->save();
      return back();
   }
}
