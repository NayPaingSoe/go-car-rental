 @extends('frontend.customer.master')

 @section('searchbtn')
 <button class="btn navbtn">
   <a href="{{route('home')}}">Search Car</a>
 </button>
 @endsection

 @section('orderbtn')
 <button class="btn navbtn active">
   <a href="{{route('customeryour_order')}}">Your Order</a>
 </button>
 @endsection




 @section('content')
 @if($no_order_found)
 <div class="row" style="min-height: 90vh;">
   <div class="col-12 text-center mt-5">
     <p style="font-size: 28px;font-weight:700">No Order Found</p>
   </div>
 </div>
 @else

 <div class="container-fluid" class="img-fluid" id="img" style="background-image: url('{{asset('frontendtemplate/images/car10.jpg')}}'); min-height: 100vh;">
   <div class="container my-5 row d-flex justify-content-center">
     <h2 class="text-center my-3 justify-content-center" style="color:#0d4a4e">
       <strong class=" p-2" style="border-radius: 10px;">Your Order</strong></h2>

     <!-- order comfirmed -->
     @if(sizeof($orderscomfirmed)>0)
     @foreach($orderscomfirmed as $ordercomfirmed)
     <div class="row m-2 p-5" style="border-radius: 10px; background-color: rgba(255,255,255,0.8);">
       <p class="col-12 text-danger">Driver comfirmed your order</p>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Driver Name</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$ordercomfirmed->driver->name}}</b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Pick-up Place</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b>
             {{$ordercomfirmed->pickup_city_name->name}}
             /
             {{$ordercomfirmed->pickup_city_name->division->name}}

           </b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Drop-off Place</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b>
             {{$ordercomfirmed->dropoff_city_name->name}}
             /
             {{$ordercomfirmed->dropoff_city_name->division->name}}

           </b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Price</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$ordercomfirmed->total_price}}</b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Pick-up Date</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$ordercomfirmed->pickup_date}}</b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Pick-up Time</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$ordercomfirmed->pickup_time}} {{$ordercomfirmed->pickup_time_am}}</b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Drop-off Date</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$ordercomfirmed->dropoff_date}}</b></p>
       </div>

      
     </div>


     @endforeach
     @endif
     <!-- orderpending -->
     @if(sizeof($orders)>0)
     @foreach($orders as $order)
     <div class="row m-2 p-5" style="border-radius: 10px; background-color: rgba(255,255,255,0.8);">
       <p class="col-12 text-danger">Waiting driver response...</p>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Driver Name</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$order->driver->name}}</b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Pick-up Place</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b>
             {{$order->pickup_city_name->name}}
             /
             {{$order->pickup_city_name->division->name}}

           </b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Drop-off Place</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b>
             {{$order->dropoff_city_name->name}}
             /
             {{$order->dropoff_city_name->division->name}}

           </b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Price</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$order->total_price}}</b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Pick-up Date</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$order->pickup_date}}</b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Pick-up Time</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$order->pickup_time}} {{$order->pickup_time_am}}</b></p>
       </div>

       <div class="col-lg-6 col-md-6 col-sm-2">
         <b>Drop-off Date</b>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-2">
         <p><i class="fas fa-caret-right"></i><b> {{$order->dropoff_date}}</b></p>
       </div>

       <div class="btn col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end">
         <a href="{{route('customercancle',$order->id)}}" class="btn btn-danger mt-1 rounded " style="height: 40px;">Cancle Order</a>
       </div>
     </div>


     @endforeach
     @endif
   </div>
 </div>

 @endif


 @endsection