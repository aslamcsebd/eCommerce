@extends('layouts.Head_Footer')

   @section('body_part')
      <div class="container-fluid">
      	<div class="row">
            <div class="col-8">
               <div class="card mb-3 ">
                   <div class="card-header bg-success">Product list</div>

                   <div class="card-body">
                       @if (session('delete'))
                           <div class="alert alert-success" role="alert">
                               {{ session('delete') }}
                           </div>
                       @endif
                       @if (session('restore'))
                           <div class="alert alert-success" role="alert">
                               {{ session('restore') }}
                           </div>
                       @endif
                       @if (session('edit'))
                           <div class="alert alert-success" role="alert">
                               {{ session('edit') }}
                           </div>
                       @endif
                     <table class="table table-striped table-dark">
                       <thead>
                         <tr>
                           <th>SL. No</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Price</th>
                           <th>Quantity</th>
                           <th>Alert_Q</th>                  
                           <th>Image</th>                  
                           <th>Action</th>                  
                         </tr>
                       </thead>
                       <tbody>
                        @forelse($products as $product)  {{-- foreach don't have @empty option --}}
                         <tr>
                           <td>{{ $loop->index + 1}}</td>
                           <td>{{ $product->name}}</td>
                           <td>{{ str_limit($product->description, 20)}}</td>
                           <td>{{ $product->price}}</td>
                           <td>{{ $product->quantity}}</td>
                           <td>{{ $product->alert_quantity}}</td>
                           <td>
                              <img src="{{ asset('Full_Project/images/product_images') }}/{{$product->product_image}}" alt="No Image found" width="60">
                           </td>
                           <td>
                              <div class="btn-group" role="group">
                                 <a href="{{ url('delete_product')}}/{{$product->id}}" class="btn btn-sm btn-danger">Delete</a>
                              <a href="{{ url('edit_product')}}/{{$product->id}}" class="btn btn-sm btn-info">Edit</a>
                              </div>                           
                           </td>
                         </tr>
                         @empty
                           <tr class="text-center text-danger">
                              <td colspan="8">No data found...</td>
                           </tr>
                         @endforelse
                                              
                       </tbody>
                     </table>
                     {{ $products->links() }}
                   </div>
               </div>

               <div class="card">
                   <div class="card-header bg-danger">Deleted product</div>

                   <div class="card-body">
                     @if (session('forceDelete'))
                           <div class="alert alert-success" role="alert">
                               {{ session('forceDelete') }}
                           </div>
                     @endif
                       
                     <table class="table table-striped table-dark">
                       <thead>
                         <tr>
                           <th>SL. No</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Price</th>
                           <th>Quantity</th>
                           <th>Alert_Q</th>                  
                           <th>Image</th>
                           <th>Action</th>                  
                         </tr>
                       </thead>
                       <tbody>
                        @forelse($deleted_products as $deleted_product)  {{-- foreach don't have @empty option --}}
                         <tr>
                           <td>{{ $loop->index + 1}}</td>
                           <td>{{ $deleted_product->name}}</td>
                           <td>{{ str_limit($deleted_product->description, 20)}}</td>
                           <td>{{ $deleted_product->price}}</td>
                           <td>{{ $deleted_product->quantity}}</td>
                           <td>{{ $deleted_product->alert_quantity}}</td>
                           <td>
                              <img src="{{ asset('Full_Project/images/product_images') }}/{{$deleted_product->product_image}}" alt="No image found" width="60">                              
                           </td>
                           <td>
                              <div class="btn-group" role="group">
                                 <a href="{{ url('restore_product')}}/{{$deleted_product->id}}" class="btn btn-sm btn-success">Restore</a>
                                 <a href="{{ url('force_delete')}}/{{$deleted_product->id}}" class="btn btn-sm btn-danger">Force delete</a>
                              </div>                           
                           </td>
                         </tr>
                         @empty
                           <tr class="text-center bg-danger">
                              <td colspan="8">No data found...</td>
                           </tr>
                         @endforelse
                                              
                       </tbody>
                     </table>
                     {{-- {{ $deleted_products->links() }} --}}
                   </div>
               </div>
           </div>
      		<div class="col-4 offset-">
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

                     @if ($errors-> all())
                        <div class="alert alert-danger">
                           @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                           @endforeach
                        </div>
                     @endif

   						<form action="{{ url('insert_product') }}" method="post" enctype="multipart/form-data">
                        @csrf
   							<div class="form-group">
                           <label>Category Name</label>
                           <select class="form-control" name="category_id">
                              <option value="">-Select One- </option>
                              @foreach ($categories as $category)
                                 <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label>Product Name</label>
                           <input type="text" class="form-control" name="name" placeholder="Product Name" value="{{ old('name')}}">
                        </div>
                        <div class="form-group">
                           <label>Product Description</label>
                           <input type="text" class="form-control" name="description" placeholder="Description" value="{{ old('description')}}">
                        </div>
                        <div class="form-group">
                           <label>Product Price</label>
                           <input type="text" class="form-control" name="price" placeholder="Price" value="{{ old('price')}}">
                        </div>
                        <div class="form-group">
                           <label>Product Quantity</label>
                           <input type="text" class="form-control" name="quantity" placeholder="Quantity" value="{{ old('quantity')}}">
                        </div>
                        <div class="form-group">
                           <label>Alert Quantity</label>
                           <input type="text" class="form-control" name="alert_quantity" placeholder="Alert_quantity" value="{{ old('alert_quantity')}}">
                        </div>
                        <div class="form-group">
                           <label>Product Image</label>
                           <input type="file" class="form-control" name="product_image">
                        </div>    
                        <button type="submit" class="btn btn-info">Add product</button>                    							
   						</form>						
   					</div>					
      			</div>				
      		</div>			
      	</div>		
      </div>
   @endsection