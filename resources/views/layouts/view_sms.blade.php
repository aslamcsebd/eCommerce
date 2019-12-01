@extends('layouts.Head_Footer')
   @section('body_part')
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-10">
               <div class="card mt-4 ">
                   <div class="card-header bg-success text-center">All message</div>
                   <div class="card-body">
                     <table class="table">
                                             
                       <thead class="thead-dark">
                         <tr>
                           <th>SL. No</th>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Subject</th>
                           <th>Message</th>
                           <th>Action</th>                  
                         </tr>
                       </thead>
                       <tbody>
                        @forelse($all_smses as $all_sms)  {{-- foreach don't have @empty option --}}
                         <tr class={{ ($all_sms->read_status==1)? "bg-info":"" }}>
                           <td>{{ $loop->index + 1}}</td>
                           <td>{{ $all_sms->full_name}}</td>
                           <td>{{ $all_sms->email}}</td>
                           <td>{{ $all_sms->subject}}</td>
                           <td>{{ str_limit($all_sms->message, 20)}}</td>
                           <td>
                              <div class="btn-group" role="group">
                                 <a href="{{ url('view_sms')}}/{{$all_sms->id}}" class="btn btn-sm btn-success">View</a>
                              <a href="{{ url('delete_sms')}}/{{$all_sms->id}}" class="btn btn-sm btn-danger">Delete</a>
                              </div>                           
                           </td>
                         </tr>
                         @empty
                           <tr class="text-center text-danger">
                              <td colspan="6">No data found...</td>
                           </tr>
                         @endforelse
                                              
                       </tbody>
                     </table>
                     {{ $all_smses->links() }}
                     @if (session('delete_sms'))
                        <div class="alert alert-danger">
                           {{ session('delete_sms') }}
                        </div>
                     @endif
                   </div>
               </div>  
            </div>
         </div>
      </div>
   @endsection
   