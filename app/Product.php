<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['name','photo','description','stock','price','category_id','user_id','weight'];
}
