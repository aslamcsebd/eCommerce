@extends('layouts.Head_Footer')  

   
   @section('body_part')   
      <div class="row justify-content-center">
         <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mt-4">

            <div class="card">
               <div class="card-header"></div>
                  <div class="card-body row">
                     <div class="col-lg col-md-6 col-sm-6">
                        <img src="{{ asset('Full_Project/images/product_images') }}/{{$single_product_info->product_image}}" class="img-thumbnail">
                     </div>
                     <div class="col-lg col-md-6 col-sm-6">
                        <h3>Name: {{ $single_product_info->name }}</h3>
                        <h6>Category Name: {{ $single_product_info-> relationToTable-> category_name}}</h6>
                        {{-- go t product model and see --}}
                        <h4>Price: ${{ $single_product_info->price }}</h4>
                        <p>{{ $single_product_info->description }}</p>
                        <a href="{{ url('add_to_card') }}/{{ $single_product_info->id }}" class="btn btn-info btn-sm">Add To Cart</a>
                     </div>                  
                  </div>                                      
            </div>
         </div>                
      </div>


         <div class="card mt-4 mb-4"> 
            <div class="card-header bg-light"><h4 class="text-center">Related Product</h4></div>
               <div class="card-body row justify-content-center">
                  @forelse($related_products as $related_product)
                     <div class="col-12 col-lg-2 col-md-4 col-sm-6 text-center view_product">
                        <h3>{{ $related_product->name }}</h3>
                        <a href="{{ url('view_product')}}/{{$related_product->id}}">
                           <img src="{{ asset('Full_Project/images/product_images') }}/{{$related_product->product_image}}" class="img-thumbnail">
                        </a>
                        <h4>Price: ${{ $related_product->price }}</h4>
                        <a href="{{ url('view_product')}}/{{$related_product->id}}" class="btn btn-info btn-sm">Add To Cart</a>
                     </div>
                  @empty
                     No related product avaiable...
                  @endforelse
               </div>
         </div>
   @endsection