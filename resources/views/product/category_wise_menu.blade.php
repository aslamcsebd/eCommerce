@extends('layouts.Head_Footer')
   @section('body_part')   

      <div class="navbar navbar-expand-lg g-success">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               @php
                   $menus= App\Category::where('menu_status', 1)->get();
                   // $menus= App\Category::latest()->take(3)->get();
                  //$menus= App\Category::all();
               @endphp

               @foreach ($menus as $menu)
                  <li class="nav-item">
                     <a class="nav-lin btn text-light btn-primary mr-1" href="{{ url('category_wise_menu') }}/{{ $menu->id }}">{{ $menu->category_name }}</a>
                  </li>
               @endforeach                                 
            </ul>
         </div>
      </div>
   
      <div class="row">
         @foreach($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-sm-12 category_wise">
               <div class="card">
                  <div class="card-header text-center text-light bg-success p-1">Product Name: {{ $product->name }}</div>
                     <div class="card-body p-2 category_wise_body">
                        <a href="{{ url('view_product')}}/{{$product->id}}">
                           <img src="{{ asset('Full_Project/images/product_images') }}/{{ $product->product_image }}" width="100%" height="180">
                        </a>
                        <div class="pt-3 pb-0">
                           <p class="float-left ">Price: ${{ $product->price }}</p>
                           <p class="float-right">
                              <a href="{{ url('view_product')}}/{{$product->id}}" class="btn btn-info btn-sm">Add To Cart</a>
                           </p>
                        </div>
                     </div>
               </div>
            </div>
         @endforeach
      </div>
   @endsection
