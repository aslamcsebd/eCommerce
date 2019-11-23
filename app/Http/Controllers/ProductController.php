<?php

   namespace App\Http\Controllers;
   use Illuminate\Http\Request;
   use App\Product;
   use Image;
   use App\Category;

class ProductController extends Controller{

   function Add_Product(){
      $products=Product::paginate(4);
      $deleted_products = Product::onlyTrashed()->get(); //{{-- withTrashed [same meanin]--}}
      $categories = Category::all();
      return view('product/Add_Product', compact('products', 'deleted_products', 'categories'));   
   }

   function all_product(){
      $all_products=Product::all();
      $categories = Category::all();
      return view('welcome', compact('all_products', 'categories'));   
   }

   function insert_product(Request $request){
    
      $request-> validate([
         'category_id'=> 'required',
         'name'=> 'required',
         'description'=> 'required',
         'price'=> 'required|numeric',
         'quantity'=> 'required|numeric',
         'alert_quantity'=> 'required|numeric'
      ]);

      $last_inserted_id = Product::insertGetId([
         'category_id'=>$request->category_id,
         'name'=>$request->name,
         'description'=>$request->description,
         'price'=>$request->price,
         'quantity'=>$request->quantity,
         'alert_quantity'=>$request->alert_quantity,
         'created_at'=>date('Y-m-d H:i:s'),
         'updated_at'=>date('Y-m-d H:i:s')
      ]);

      if ($request->hasFile('product_image')) {  //please link image upper... use Image;
            $photo_to_upload=$request->product_image;
            $fileName=$last_inserted_id.".".$photo_to_upload->getClientOriginalExtension();
            Image::make($photo_to_upload)->resize(400,380)->save(base_path('public/Full_Project/images/product_images/'.$fileName));  
            //Image quality   save(base_path('url'), 50);   this 50% image quality will be save
         Product::find($last_inserted_id)->update([
            'product_image'=> $fileName
         ]);
      }
      return back()->with('insert','Insert successfully');
   
   }

   function delete_product($product_id){
      Product::find($product_id)->delete();
      return back()->with('delete', 'Product delete successfully');
   }

   function edit_product($product_id){
      // $single_product_info= Product::find($product_id);
      $single_product_info= Product::findOrFail($product_id);
      return view('product/Edit_Product', compact('single_product_info')); 
   }

   function view_product($product_id){
      // $single_product_info= Product::find($product_id);
      $single_product_info= Product::findOrFail($product_id);
      $related_products= Product::where('id', '!=', $product_id)->get();
      return view('product/View_Product', compact('single_product_info', 'related_products')); 
   }

   function edit_product_insert(Request $request){

      if ($request->hasFile('product_image')) { 
            $default_image = Product::find($request->product_id)->product_image;
            if ($default_image=='product_default_image.jpg') {
                  $photo_to_upload=$request->product_image;
                  $fileName=$request->product_id.".".$photo_to_upload->getClientOriginalExtension();
                  Image::make($photo_to_upload)->resize(400,380)->save(base_path('public/Full_Project/images/product_images/'.$fileName));  
                  Product::find($request->product_id)->update([
                     'product_image'=> $fileName
                  ]);   
            }else{

               $old_image_name = Product::find($request->product_id)->product_image;
               unlink(base_path('public/Full_Project/images/product_images/'.$old_image_name));

               $photo_to_upload=$request->product_image;
               $fileName=$request->product_id.".".$photo_to_upload->getClientOriginalExtension();
               Image::make($photo_to_upload)->resize(400,380)->save(base_path('public/Full_Project/images/product_images/'.$fileName));  
               Product::find($request->product_id)->update([
                  'product_image'=> $fileName
               ]);
            }
      }               

      Product::find($request->product_id)->update([
         'name'=>$request->name,
         'description'=>$request->description,
         'price'=>$request->price,
         'quantity'=>$request->quantity,
         'alert_quantity'=>$request->alert_quantity
      ]);
      return redirect('Add_Product')->with('edit', 'Product edit successfully');
   }   

   function restore($product_id){
      Product::onlyTrashed()->where('id', $product_id)->restore();
      return back()->with('restore', 'Product restore successfully');
   }

   function force_Delete($product_id){
      // Product::onlyTrashed()->where('id', $product_id)->forceDelete();
      // Same work
      echo $single_product_info= Product::findOrFail($product_id);

      // Product::onlyTrashed()->find($product_id)->forceDelete();
      // unlink(base_path('public/Full_Project/images/product_images/'.$old_image_name));

      // return back()->with('forceDelete', 'Product force delete successfully');
   }

}