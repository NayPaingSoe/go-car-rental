<?php

namespace App\Http\Controllers\frontend;

use DB;
use App\City;
use DateTime;
use App\Order;
use App\Driver;
use App\Division;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $division = Division::all();
    return view('frontend.customer.index', compact('division'));
  }

  public function fetch(Request $request)
  {
    $id = $request->id;
    $city = City::where('division_id', $id)->get();
    return $city;
  }
  public function details($id)
  {
    $driver = Driver::find($id);
    $driverhomedivision = Division::find($id);
    return view('frontend.customer.search_detail', compact('driver', 'driverhomedivision'));
  }

  public function dropfetch(Request $request)
  {
    $id = $request->id;
    $city = City::where('division_id', $id)->get();
    return $city;
  }
  public function searchdriver(Request $request)
  {

    $pickupdivision = $request->pickupdivision;
    $pickupcity = $request->pickupcity;
    $dropoffdivision = $request->dropoffdivision;
    $dropoffcity = $request->dropoffcity;
    $pickupdate = $request->pickupdate;
    $dropdate = $request->dropdate;
    $pickuptime = $request->pickuptime;
    $pickuptimeam = $request->pickuptimeam;
    $userorderdetails = [$pickupdivision, $pickupcity, $dropoffdivision, $dropoffcity, $pickupdate, $dropdate, $pickuptime, $pickuptimeam];
    $drivers = Driver::all();
    $driv = $drivers->where('busy', '=', 0);
    $empty = $driv->count();
    

    if (!$empty) {
      
      $nodriver_found = 1;
      return view('frontend.customer.search_result', compact('nodriver_found'));
    } else 
    {
      $nodriver_found = 0;
      
      foreach ($driv as $driver) {
        //0  
        $samedivision = $driver::where('travelablecity', 0)->where('division_id', '=', $pickupdivision)->get();

        //1 dd($samedivision);
        $users = DB::table('drivers')
          ->join('cantraveldriver', 'drivers.id', '=', 'cantraveldriver.driver_id')
          ->select('cantraveldriver.division_id as destination', 'drivers.*')
          ->get();
        $usersdriver = $users->where('division_id', $pickupdivision)
          ->where('destination', $dropoffdivision);
        
        $dropdate = strtotime($dropdate);
        $pickupdate = strtotime($pickupdate);
        $interva = ($dropdate - $pickupdate) / 60 / 60 / 24;
        $interval = 1 + $interva;
      }

      return view('frontend.customer.search_result', compact('nodriver_found','samedivision', 'usersdriver', 'interval', 'userorderdetails'));
    }
  }

  public function notification()
  {
    $orders = Order::all();

    return view('frontend.customer.notification', compact('orders'));
  }

  public function customeryour_order()
  {


    $orders = Order::where('status', '=', '0')
      ->get();
    
    $orderscomfirmed = Order::where('status', '=', '1')
    ->get();
   
    $empty=$orders->count();
    $emptycomfirmed=$orderscomfirmed->count();

    if(!$empty && !$emptycomfirmed)
    {
     
    $no_order_found=1;
    return view('frontend.customer.customeryour_order', compact('no_order_found'));
    }
    else
    {

      $no_order_found=0;
      $authid=Auth::user()->id;
      $orders = Order::where('status', "0")
      ->where('user_id', $authid)
      ->get();

      $orderscomfirmed = Order::where('status', "1")
      ->where('user_id', $authid)
      ->get();
     
    return view('frontend.customer.customeryour_order', compact('orders','no_order_found','orderscomfirmed'));
  
    }

  }
  public function customercancle($id)
  {
    $no_order_found=0;

    $ordercancle = Order::find($id);
    $ordercancle->status = "cancle";
    $ordercancle->save();

    $authid=Auth::user()->id;
    $orders = Order::where('status', '=', "0")
    ->where('user_id', $authid)
    ->get();
    $orderscomfirmed = Order::where('status', '=', "1")
    ->where('user_id', $authid)
    ->get();
    return view('frontend.customer.customeryour_order', compact('orders','no_order_found','orderscomfirmed'));
  }
}
