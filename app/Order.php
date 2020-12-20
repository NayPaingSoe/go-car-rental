<?php

namespace App;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;
use App\Driver;
class Order extends Model
{
    use SoftDeletes;

    protected $fillable=['user_id','driver_id','pickup_city','dropoff_city','pickup_date','dropoff_date','pickup_time','pickup_time_am','total_price','status'];

    public function user()
     {
     	return $this->belongsTo('App\User');
     }
   public function driver()
     {
       return $this->belongsTo('App\Driver');
     }
 
     public function pickup_city_name()
     {
      return $this->belongsTo('App\City','pickup_city');
     }
     public function dropoff_city_name()
     {
      return $this->belongsTo('App\City','dropoff_city');
     }
} 