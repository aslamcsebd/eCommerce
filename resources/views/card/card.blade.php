@extends('layouts.Head_Footer')
@section('body_part')
<div class="container-fluid">
   <div class="row justify-content-center">
      <div class="col-10 my-5 border-danger">
         <table class="table table-striped border">
            <thead class="thead-dark">
               <tr>
                  <th>SL. No</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
               </tr>
            </thead>
            <tbody>
               @forelse($card_items as $card_item)
               <tr>
                  <td>
                     <img src="{{ asset('Full_Project/images/product_images') }}/{{ $card_item->relationToCard->product_image }}" width="70">
                     @if($card_item->relationToCard->quantity < $card_item->product_quantity)
                     <div class="alert alert-danger" width="20px">
                        Please remove
                     </div>
                     @endif
                  </td>
                  <td>
                     {{ $card_item->relationToCard->name}}
                     <p>
                        <small>
                        <a href="{{ url('card_delete') }}/{{ $card_item->id }}" >Delete Item</a>
                        </small>
                     </p>
                  </td>
                  <td>${{ $card_item->relationToCard->price}}</td>
                  <td>
                     <div class="quantity_input">
                        <span>Qty : </span>
                        <input type="number" value="{{ $card_item->product_quantity }}">
                     </div>
                  </td>
                  <td>
                     {{ ($card_item->product_quantity)
                     *
                     ($card_item->relationToCard->price) }}
                  </td>
                  
               </tr>
               @empty
                  <tr class="text-center text-danger">
                     <td colspan="6">No data found...</td>
                  </tr>
               @endforelse                     
            </tbody>
         </table>
         <div class="row mb-2">
            <div class="col"></div>
            <div class="col">
               <a class="btn btn-success" href="{{ '/' }}">Continue Shopping</a>
            </div>
            <div class="col"></div>
            <div class="col">
               <a class="btn btn-danger" href="{{ url('delete_all_cart') }}">Clear Cart</a>
            </div>
            <div class="col">
               <a class="btn btn-info" href="">Update Cart</a>
            </div>
         </div>
         {{-- {{ $card_items->links() }} --}}
         @if (session('delete_sms'))
            <div class="alert alert-danger">
               {{ session('delete_sms') }}
            </div>
         @endif            
      </div>
   </div>
</div>
@endsection