@extends('layouts.Head_Footer')
   @section('body_part')
      <div class="container-fluid single_sms">
         <div class="row justify-content-center">
            <div class="col-8">
               <div class="card mt-4 ">
                  <div class="card-header text-center"> Single message </div>
                   <div class="card-body">
                     <table class="table">
                        <tr>
                           <th width="100" class="text-right">Name : </th>     
                           <td class="text-left"> {{ $single_sms_view->full_name }}</td>     
                        </tr>
                        <tr>
                           <th width="100" class="text-right">Email   :</th> 
                           <td class="text-left">{{ $single_sms_view->email }}}</td>     
                        </tr>
                        <tr>
                           <th width="100" class="text-right">Subject :</th>    
                           <td class="text-left"> {{ $single_sms_view->subject }} </td>     
                        </tr>
                        <tr>
                           <th width="110" class="text-right">Message :</th>    
                           <td class="text-left "> <p class="message">{{ $single_sms_view->message }} </p> </td>     
                        </tr>             
                     </table>
                   </div>
               </div>  
               <div class="mt-4">                  
                  <a href="{{ url('contact_sms_view') }}" class="btn btn-info">Back</a> 
               </div>
            </div>

         </div>
      </div>
   @endsection
