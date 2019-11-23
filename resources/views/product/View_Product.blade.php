@extends('layouts.Head_Footer')   
   @section('body_part')   
      <div class="row justify-content-center">
         <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mt-4">

            <div class="card">
               <div class="card-header">Link...[path]</div>
                  <div class="card-body row">
                     <div class="col-lg col-md-6 col-sm-6">
                        <img src="{{ asset('Full_Project/images/product_images') }}/{{$single_product_info->product_image}}" class="img-thumbnail">
                     </div>
                     <div class="col-lg col-md-6 col-sm-6">
                        <h3>Name: {{ $single_product_info->name }}</h3>
                        <h4>Price: ${{ $single_product_info->price }}</h4>
                        <p>{{ $single_product_info->description }}</p>
                        <a href="" class="btn btn-info btn-sm">Add To Card</a>
                     </div>                  
                  </div>                                      
            </div>
         </div>                
      </div>


         <div class="card mt-4 mb-4">
            <div class="card-header bg-light"><h4 class="text-center">Related Product</h4></div>
               <div class="card-body row justify-content-center">
                  @foreach($related_products as $related_product)
                     <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 text-center" style="margin: 3px; padding: 5px; border: 1px solid cyan; border-radius: 20px;">
                        <h3>{{ $related_product->name }}</h3>
                        <a href="{{ url('view_product')}}/{{$related_product->id}}">
                           <img src="{{ asset('Full_Project/images/product_images') }}/{{$related_product->product_image}}" class="img-thumbnail" style="border-radius: 15px;">
                        </a>
                        <h4>Price: ${{ $related_product->price }}</h4>
                        <a href="{{ url('view_product')}}/{{$related_product->id}}" class="btn btn-info btn-sm">Add To Card</a>
                     </div>
                  @endforeach
               </div>
         </div>
   @endsection