<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
   protected $fillable =['name','description','price','quantity','alert_quantity', 'product_image'];

   use SoftDeletes;
}
