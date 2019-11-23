@extends('layouts/app')    {{-- head, fotter page include --}}

@section('content')
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-8">
               <div class="card">
                   <div class="card-header">Dashboard</div>

                   <div class="card-body">
                       @if (session('status'))
                           <div class="alert alert-success" role="alert">
                               {{ session('status') }}
                           </div>
                       @endif

                     <table class="table table-striped table-dark">
                       <thead>
                         <tr>
                           <th scope="col">Name</th>
                           <th scope="col">Email</th>
                           <th scope="col">Create at</th>
                           <th scope="col">update at</th>
                         </tr>
                       </thead>
                       <tbody>
                        @foreach($all_users as $user)
                         <tr>
                           <td>{{ $user->name}}</td>
                           <td>{{ $user->email}}</td>
                           <td>{{ $user->created_at}}</td>
                           <td>{{ $user->updated_at}}</td>
                         </tr>
                         @endforeach                      
                       </tbody>
                     </table>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endsection