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
         @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-sm-12 category_wise">
               <div class="card">
                  <div class="card-header bg-light">Product Name: {{ $product->name }}</div>
                     <div class="card-body category_wise_body">
                        <a href="{{ url('view_product')}}/{{$product->id}}">
                           <img src="{{ asset('Full_Project/images/product_images') }}/{{ $product->product_image }}" class="img-thumbnail">
                        </a>
                        <h4>Price: ${{ $product->price }}</h4>
                        <a href="{{ url('view_product')}}/{{$product->id}}" class="btn btn-info btn-sm">Add To Cart</a>
                     </div>
               </div>
            </div>
         @endforeach
      </div>
   @endsection