@extends('layouts/app')

@section('content')
   <div class="container">
      <div class="row">
         <div class="col-6 offset-3">
            <div class="card">
               <div class="card-header bg-success">
                  Add Product
               </div>               
               <div class="card-body">
                  @if (session('insert'))
                     <div class="alert alert-success">
                        {{ session('insert') }}
                     </div>
                  @endif

                  <form action="{{ url('edit_product_insert') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                        <label>Product Name</label>
                        <input type="hidden" name="product_id" value="{{$single_product_info->id}}">
                        

                        <input type="text" class="form-control" name="name" value="{{$single_product_info->name}}">
                     </div>
                     <div class="form-group">
                        <label>Product Description</label>
                        <input type="text" class="form-control" name="description" value="{{$single_product_info->description}}">
                     </div>
                     <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" class="form-control" name="price" value="{{$single_product_info->price}}">
                     </div>
                     <div class="form-group">
                        <label>Product Quantity</label>
                        <input type="text" class="form-control" name="quantity" value="{{$single_product_info->quantity}}">
                     </div>                        

                     <div class="form-group">
                        <label>Alert Quantity</label>
                        <input type="text" class="form-control" name="alert_quantity" value="{{$single_product_info->alert_quantity}}">
                     </div>

                     <div class="form-group">
                        <label>Update Image</label>
                        <input type="file" class="form-control" name="product_image">                        
                     </div>

                     <div class="form-group">
                        <img src="{{ asset('Full_Project/images/product_images') }}/{{$single_product_info->product_image}}" alt="Image not found" width="80">                      
                        <label>Old Image</label>
                     </div>

                     <button type="submit" class="btn btn-info">Edit product</button>                                       
                  </form>                 
               </div>           
            </div>            
         </div>         
      </div>      
   </div>
@endsection