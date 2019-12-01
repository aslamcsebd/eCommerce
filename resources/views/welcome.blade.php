@extends('layouts.Head_Footer')
   @section('body_part')   

      <div class="navbar navbar-expand-lg g-success">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto bg-light">
               @php
                   $menus= App\Category::where('menu_status', 1)->get();
                   // $menus= App\Category::latest()->take(3)->get();
                  //$menus= App\Category::all();
               @endphp

               @foreach ($menus as $menu)
                  <li class="nav-item">
                     <a class="nav-lin btn" href="{{ url('category_wise_menu') }}/{{ $menu->id }}">{{ $menu->category_name }}</a>
                  </li>
               @endforeach                                 
            </ul>
         </div>
      </div>
   
      <div class="row">
         @foreach($all_products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-sm-12" style="margin: 5px 0px; width: 60%;">
               <div class="card">
                  <div class="card-header bg-light">Product Name: {{ $product->name }}</div>
                     <div class="card-body" style="border: 1px solid cyan;">
                        <a href="{{ url('view_product')}}/{{$product->id}}">
                           <img src="{{ asset('Full_Project/images/product_images') }}/{{ $product->product_image }}" class="img-thumbnail">
                        </a>
                        <h4>Price: ${{ $product->price }}</h4>
                        <div>
                           @if( $product->quantity > 0 )
                              <a href="{{ url('view_product')}}/{{$product->id}}" class="btn btn-info btn-sm">Add To Card</a>
                           
                           @else
                              <div class="alert alert-danger">
                                 No product available
                              </div>
                           @endif
                        </div>

                     </div>
               </div>
            </div>
         @endforeach
      </div>
      <h2>Filter</h2>

      <div class="card mt-4">
         <div class="card-header bg-light">
            <div id="filters" class="button-group">  
               <button class="button is-checked" data-filter="*">Show all</button>
                  @foreach($categories as $category)
                     <button class="button" data-filter=".aslam{{ $category->id }}">{{ $category->category_name }}</button>
                  @endforeach
            </div>         
         </div>
         <div class="card-body">
            <div class="grid row">
               @foreach($all_products as $product)
                  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 element-item all aslam{{ $product->category_id }}" style="margin: 2px; padding: 3px; border: 1px solid cyan; border-radius: 10px;">                  

                     <h4>{{ $product->name }}</h4> 
                  
                     <a href="{{ url('view_product')}}/{{$product->id}}">
                        <img src="{{ asset('Full_Project/images/product_images') }}/{{$product->product_image}}" class="img-thumbnail" style="border-radius: 15px;">
                     </a>
                     <h4>Price: ${{ $product->price }}</h4>
                     {{-- <a href="{{ url('view_product')}}/{{$product->id}}" class="btn btn-info btn-sm">Add To Card</a> --}}
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   @endsection