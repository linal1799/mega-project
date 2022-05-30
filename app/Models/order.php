<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function user(){
        return  $this->hasOne(user::class,'id','user_id');
      }
      public function products(){
        return  $this->hasOne(product::class,'id','product_id');
      }

}
