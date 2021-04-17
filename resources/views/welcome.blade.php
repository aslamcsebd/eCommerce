@extends('layouts.Head_Footer')
   @section('body_part')   

      <div class="navbar navbar-expand-lg g-success">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               @php
                   $menus= App\Category::where('menu_status', 1)->get();
               @endphp
               @foreach ($menus as $menu)
                  <li class="nav-item">
                     <a class="nav-lin btn btn-primary mr-1 text-light" href="{{ url('category_wise_menu') }}/{{ $menu->id }}">{{ $menu->category_name }}</a>
                  </li>
               @endforeach                                 
            </ul>
         </div>
      </div>
   
      <div class="row">
         @foreach($all_products as $product)
            <div class="col-12 col-lg-3 col-md-4 col-sm-6 col-xs-12 welcomeProduct">
               <div class="card">
                  <div class="card-header text-center text-light bg-success p-1">Product Name: {{ $product->name }}</div>
                  <div class="card-body p-2">
                     <a href="{{ url('view_product')}}/{{$product->id}}">
                        <img src="{{ asset('Full_Project/images/product_images') }}/{{ $product->product_image }}" width="100%" height="180">
                     </a>
                     <div class="pt-3 pb-0">
                        <p class="float-left ">Price: ${{ $product->price }}</p>
                        <p class="float-right">
                           @if( $product->quantity > 0 )
                              <a href="{{ url('view_product')}}/{{$product->id}}" class="btn btn-info btn-sm">Add To Cart</a>                           
                           @else
                              <div class="alert alert-danger">
                                 No product available
                              </div>
                           @endif
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         @endforeach
      </div>

      <div class="card mt-4 mb-4">
         <div class="card-header pb-0 badge-info">
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
                  <div class="col-12 col-lg-3 py-2 col-md-4 col-sm-6 element-item all aslam{{ $product->category_id }}">
                     <div class="card">
                        <div class="card-header text-light text-center p-1 bg-success">{{ $product->name }}</div>
                        <div class="card-body p-1">
                           <a href="{{ url('view_product')}}/{{$product->id}}">
                              <img src="{{ asset('Full_Project/images/product_images') }}/{{$product->product_image}}" width="100%" height="180">
                           </a>
                           <p class="p-1 pb-0">Price: ${{ $product->price }}</p>                  
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   @endsection
