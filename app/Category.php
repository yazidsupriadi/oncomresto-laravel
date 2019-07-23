<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    function children()
    {
    	return $this->hasMany('app\Category','parent_id','id');
    }
    function parent(){
    	return $this->belongsTo('app\Category','parent_id','id');
    }

    protected $fillable = ['name','slug','parent_id'];
}
