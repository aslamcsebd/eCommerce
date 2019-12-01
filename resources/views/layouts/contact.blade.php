@extends('layouts.Head_Footer')

   @section('body_part')
      <div class="container-fluid">
         <br>
         <div class="row justify-content-center">
            <div class="col-8">
               <div class="card">
                  <div class="card-header">
                    <h4 class="text-center">Contact Now</h4> 
                  </div>               
                  <div class="card-body">
                     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                        </div>
                     @endif

                     @if ($errors-> all())
                        <div class="alert alert-danger">
                           @foreach ($errors->all() as $error)
                              <li>{{$error}}</li>
                           @endforeach
                        </div>
                     @endif

                     <form action="{{ url('contact_insert') }}" method="post" enctype="multipart/form-data">
                        @csrf                        
                        <div class="row">                           
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="full_name" placeholder="Full Name" value="{{ old('full_name')}}">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email')}}">
                           </div>
                        </div>
                        <div class="form-group">
                           <input type="text" class="form-control" name="subject" placeholder="subject" value="{{ old('subject')}}">
                        </div>
                        <div class="form-group">
                           <textarea type="text" class="form-control" name="message" rows="8" placeholder="Message" value="{{ old('message')}}"></textarea>
                        </div>    
                        <button type="submit" class="btn btn-info">Send Message</button>                                     
                     </form>                 
                  </div>               
               </div>            
            </div>         
         </div>      
      </div>
   @endsection