@extends('layouts.Head_Footer')

   @section('body_part')
      <div class="container-fluid">
         <div class="row mt-3">
            <div class="col-8">
               <div class="card mb-3 ">
                   <div class="card-header bg-success text-light text-center">Category List</div>

                   <div class="card-body">
                       @if (session('delete'))
                           <div class="alert alert-success" role="alert">
                               {{ session('delete') }}
                           </div>
                       @endif                       
                     <table class="table table-striped table-dark">
                       <thead>
                         <tr>
                           <th>SL. No</th>
                           <th>Category Name</th>
                           <th>Menu Status</th>
                           <th>Created At</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                           @forelse($categories as $category)
                         <tr>
                           <td>{{ $loop->index + 1}}</td>
                           <td>{{ $category->category_name}}</td>
                           <td>{{ ($category->menu_status == 1) ? 'Yes':'No'}}</td>
                           <td>
                              {{ $category->created_at->format('d-M-Y  h:i:s A')}}
                              <br>
                              {{ $category->created_at->diffForHumans()}}
                           </td>
                           
                           <td>
                              <div class="btn-group" role="group">
                                 <a href="{{ url('change_category')}}/{{$category->id}}" class="btn btn-sm btn-danger">Change</a>
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
                     {{ $categories->links() }}
                   </div>
               </div>
           </div>
            <div class="col-4 offset-">
               <div class="card">
                  <div class="card-header bg-success text-light text-center">
                     Add Category
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

                     <form action="{{ url('insert_category') }}" method="post">
                        @csrf
                        <div class="form-group">
                           <label>Category Name</label>
                           <input type="text" class="form-control" name="category_name" placeholder="Category Name" value="{{ old('name')}}">
                        </div>
                        <div class="form-group">
                           <input type="checkbox" id="menu" name="menu_status" value="1">
                           <label for="menu">Use as Menu</label>
                        </div>                            
                        <button type="submit" class="btn btn-info">Add Category</button>
                     </form>                 
                  </div>               
               </div>            
            </div>         
         </div>      
      </div>
   @endsection