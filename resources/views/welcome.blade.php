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
            <div class="col-12 col-lg-3 col-md-4 col-sm-6 col-sm-12 welcomeProduct">
               <div class="card">
                  <div class="card-header bg-light">Product Name: {{ $product->name }}</div>
                     <div class="card-body">
                        <a href="{{ url('view_product')}}/{{$product->id}}">
                           <img src="{{ asset('Full_Project/images/product_images') }}/{{ $product->product_image }}" class="img-thumbnail">
                        </a>
                        <h4>Price: ${{ $product->price }}</h4>
                        <div>
                           @if( $product->quantity > 0 )
                              <a href="{{ url('view_product')}}/{{$product->id}}" class="btn btn-info btn-sm">Add To Cart</a>
                           
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

      <div class="card mt-4 mb-4">
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
                  <div class="col-12 col-lg-2 col-md-4 col-sm-6 element-item all aslam{{ $product->category_id }}">                                        
                     <h4>{{ $product->name }}</h4>                
                     <a href="{{ url('view_product')}}/{{$product->id}}">
                        <img src="{{ asset('Full_Project/images/product_images') }}/{{$product->product_image}}" class="img-thumbnail">
                     </a>
                     <h5>Price: ${{ $product->price }}</h5>
                  
                  </div>
                  <br>
               @endforeach
               <br>
               <hr>
            </div>
         </div>
      </div>

   @endsection
