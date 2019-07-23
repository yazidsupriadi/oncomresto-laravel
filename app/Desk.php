<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    //
    protected $table = 'desks';
    protected $fillable = ['name','position','status'];
    
}
