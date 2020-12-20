<?php

namespace App;
use App\City;
use App\Division;
use App\Order;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Driver extends Model
{
    use SoftDeletes;

    // protected $guard = 'driver';

    protected $fillable=['name','driverphoto','licencephoto','carphoto','phone','cartype','carno','cardetail','price','travelablecity','noofseats','busy','city_id','division_id','user_id'];



    public function divisions()
     {
     	return $this->belongsToMany('App\Division','cantraveldriver','driver_id','division_id')->withTimestamps();
     }

     public function user()
     {
     	return $this->belongsTo('App\User');
     }

     public function order()
     {
        return $this->hasMany('App\Order');

     }

}
 