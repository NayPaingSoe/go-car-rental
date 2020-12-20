<?php

namespace App;

use App\Division;
use App\Driver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class City extends Model
{
    use SoftDeletes;

    protected $fillable=['name','division_id'];

     public function division()
    { 
    	return $this->belongsTo('App\Division');
    }
    public function orders()
    { 
    	return $this->belongsTo('App\Order');
    }
   
}
