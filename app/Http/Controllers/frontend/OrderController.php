<?php

namespace App\Http\Controllers\frontend;

use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Driver;
use App\Order;
use App\City;
use Auth;
use DB;

class OrderController extends Controller
{

        public function requestorder(Request $request)
        {

                $user_id = $request->user_id;
                $driver_id = $request->driver_id;
                $total = $request->total;
                $pickupcity = $request->pickupcity;
                $dropoffcity = $request->dropoffcity;
                $pickupdate = $request->pickupdate;
                $dropdate = $request->dropdate;
                $pickuptime = $request->pickuptime;
                $pickuptimeam = $request->pickuptimeam;
                $order = new Order;
                $order->user_id = $user_id;
                $order->driver_id = $driver_id;
                $order->pickup_city = $pickupcity;
                $order->dropoff_city = $dropoffcity;
                $order->pickup_date = $pickupdate;
                $order->dropoff_date = $dropdate;
                $order->pickup_time = $pickuptime;
                $order->pickup_time_am = $pickuptimeam;
                $order->total_price = $total;
                $order->status = 0;
                $order->save();
        }
        public function statusone($id) //make busy driver
        {
                $order = Order::find($id)
                        ->update(['status' => 1]);
                $aid = Auth::user()->id;
                $driver = Driver::where('user_id', $aid)
                        ->select('id')
                        ->first();
                $driverid = $driver->id;
                $makebusy=Driver::find($driverid)
                        ->update(['busy'=>1]);
                $orders = Order::where('status', '=', 0)
                        ->where('driver_id', $driverid)
                        ->get();
                // ->update(['busy' => 1]);
                session(['accepted' => 'good']);
                return view('frontend.driver.index_order', compact('orders'));
        }
        public function yourorder()
        {
                $aid = Auth::user()->id;
                $driver = Driver::where('user_id', $aid)
                        ->select('id')
                        ->first();
                $driverid = $driver->id;
                $orders = Order::where('status', '=', 1)
                        ->where('driver_id', $driverid)
                        ->get();

                return view('frontend.driver.your_order', compact('orders'));
        }

        public function statusoneone($id)
        {
                $order = Order::find($id);
                $order->status = "done";
                $order->save();

                $aid = Auth::user()->id;
                $driver = Driver::where('user_id', $aid)
                        ->select('id')
                        ->first();
                $driverid = $driver->id;
                $orders = Order::where('status', '=', 1)
                        ->where('driver_id', $driverid)
                        ->get();
                return view('frontend.driver.your_order', compact('orders'));
        }
        public function cancle($id)
        {
                $order = Order::find($id);
                $order->status = "cancle";
                $order->save();
                $orders = Order::where('status', '=', '0')->get();
                return view('frontend.driver.your_order', compact('orders'));
        }
}
