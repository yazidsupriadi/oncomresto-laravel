<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    function user()
    {
    	return $this->belongsTo('App\User');
    }

    function product(){
    	return $this->belongsTo('App\Product');
    }
    function desk(){
        return $this->belongsTo('App\Desk');
    }
    protected $table = 'transactions';
    
    protected  $casts = [
    	'ekspedisi' => 'array',
    ];
}
