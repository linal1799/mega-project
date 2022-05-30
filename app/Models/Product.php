<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function secret(){
        return  $this->hasOne(secret::class,'id','secret_id');
      }

}

