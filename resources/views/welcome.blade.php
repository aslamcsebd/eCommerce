@extends('layouts.Head_Footer')   
   @section('body_part')   
      <div class="row">
         @foreach($all_products as $product)
            <div class="col-lg-3 col-md-6 col-sm-12" style="margin: 10px 0px; width: 60%;">
               <div class="card">
                  <div class="card-header bg-light">Product Name: {{ $product->name }}</div>
                     <div class="card-body" style="border: 1px solid cyan;">
                        <a href="{{ url('view_product')}}/{{$product->id}}">
                           <img src="{{ asset('Full_Project/images/product_images') }}/{{ $product->product_image }}" class="img-thumbnail">
                        </a>
                        <h4>Price: ${{ $product->price }}</h4>
                        <a href="{{ url('view_product')}}/{{$product->id}}" class="btn btn-info btn-sm">Add To Card</a>
                     </div>
               </div>
            </div>
         @endforeach
      </div>

      <h2>Filter</h2>

      <div class="card mt-4 mb-4">
         <div class="card-header bg-light">
            <div id="filters" class="button-group">
               <button class="button is-checked" data-filter=".all">Show all</button>
               @foreach($categories as $category)
                  <button class="button" data-filter=".item{{ $category->id }}">{{ $category->category_name }}</button>
               @endforeach
            </div>         
         </div>
         <div class="card-body row justify-content-center">
            @foreach($all_products as $product)
               <div class="col-lg-2 element-item all item{{ $product->category_id }}" data-category="transition" style="margin: 3px; padding: 5px; border: 1px solid cyan; border-radius: 20px;">
                  <h3>{{ $product->name }}</h3>
                  <a href="{{ url('view_product')}}/{{$product->id}}">
                     <img src="{{ asset('Full_Project/images/product_images') }}/{{$product->product_image}}" class="img-thumbnail" style="border-radius: 15px;">
                  </a>
                  <h4>Price: ${{ $product->price }}</h4>
                  <a href="{{ url('view_product')}}/{{$product->id}}" class="btn btn-info btn-sm">Add To Card</a>
               </div>
            @endforeach
         </div>
      </div>

   @endsection