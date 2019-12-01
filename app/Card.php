<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    
   function relationToCard(){
      return $this->hasOne('App\Product', 'id', 'product_id');
      // N:B: hasOne('Destination model', 'Destination model id(primary key)', 'to this model foreign key');
   }



}
