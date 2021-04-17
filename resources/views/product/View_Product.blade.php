@extends('layouts.Head_Footer')   
@section('body_part')   
   <div class="row justify-content-center">
      <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mt-4">

         <div class="card">
            <div class="card-header badge-success text-light text-center">Selected product</div>
               <div class="card-body row justify-content-center">
                  <div class="col-lg-4 col-md-6 col-sm-6">
                     <img src="{{ asset('Full_Project/images/product_images') }}/{{$single_product_info->product_image}}" width="260">
                  </div>
                  <div class="col-lg col-md-6 col-sm-6 ml-3">
                     <h5>Name: {{ $single_product_info->name }}</h5>
                     <h6>Category Name: {{ $single_product_info-> relationToTable-> category_name}}</h6>
                     {{-- go t product model and see --}}
                     <h5>Price2: ${{ $single_product_info->price }}</h5>
                     <p> <b>Details : </b> {{ $single_product_info->description }}</p>
                     <a href="{{ url('add_to_card') }}/{{ $single_product_info->id }}" class="btn btn-info btn-sm">Add To Cart</a>
                  </div>                  
               </div>                                      
         </div>
      </div>                
   </div>
   <div class="row justify-content-center">
      <div class="col-10">
         <div class="card my-4">
            <div class="card-header text-light bg-primary text-center">Related Product</div>
               <div class="card-body row justify-content-center">
                  @forelse($related_products as $related_product)
                     <div class="col-12 col-lg-3 col-md-4 col-sm-6 col-xs-12 welcomeProduct">
                        <div class="card">
                           <div class="card-header text-center text-light bg-success p-1">Product : {{ $related_product->name }}</div>
                           <div class="card-body p-2">
                              <a href="{{ url('view_product')}}/{{$related_product->id}}">
                                 <img src="{{ asset('Full_Project/images/product_images') }}/{{ $related_product->product_image }}" width="100%" height="180">
                              </a>
                              <div class="pt-3 pb-0">
                                 <p class="float-left ">Price: ${{ $related_product->price }}</p>
                                 <p class="float-right">
                                   <a href="{{ url('view_product')}}/{{$related_product->id}}" class="btn btn-info btn-sm">Add To Cart</a>   
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  @empty
                     No related product avaiable...
                  @endforelse     
               </div>
         </div>
      </div>
   </div>

@endsection