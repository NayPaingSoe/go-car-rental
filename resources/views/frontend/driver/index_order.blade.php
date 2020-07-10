@extends('frontend.driver.master')

@section('content')

<div class="container-fluid">
  <div class="container">


            @foreach($orders as $order)
  
        
 <div class="outcard d-flex justify-content-center">
      <div class="card col-lg-9 col-md-12 col-sm-12">
        <div class="card-block">
     <div class="row px-3 pr-sm-0 pt-3 pb-0"  style="transition: all 0.5s ease;">
            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="logoframe p-1 pt-4" style="height: 40px; width: auto;" >
                <img src="{{asset('frontendtemplate\images\go_logo.png')}}" style="height: 100px;width:auto;" alt="">
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-5 pl-sm-4 ">
              <p >Customer Name</p>
              <p >Pick-up Place</p>
              <p >Drop-off Place</p>
              <p >Price</p>
            </div>

 
  <div class="col-lg-4 col-md-3 col-sm-5 pl-sm-4  pl-1 bg-light">
              <p ><i class="fas fa-caret-right"></i>{{$order->user->name}}</p>
              <p ><i class="fas fa-caret-right"></i>{{$order->pickup_division}} \ {{$order->pickup_city}} </p>
              <p ><i class="fas fa-caret-right"></i>{{$order->dropoff_city}} \ {{$order->dropoff_division}}</p>
              <p ><i class="fas fa-caret-right"></i>{{$order->price}}</p>
            </div>
               <div class="btn-group col-lg-3 col-md-3">

           
            
            <!--  <button class="btn btn-primary m-1 rounded" style="height: 40px">Accept</button> -->
              <a href="{{route('cancle',$order->id)}}" onclick="return confirm('are you sure to reject?')" class="btn btn-danger m-1 rounded " style="height: 40px;">Cancle</a>
              <a href="{{route('statusone',$order->id)}}" class="btn btn-info m-1 rounded"  style="height: 40px;">Accept </a>


           </div>

            <div class="col-lg-3 col-md-3 col-sm-5 pl-sm-4 offset-sm-2 offset-md-2 offset-lg-2 p-0 hideclass">
              <p >Pick-up Date</p>
              <p >Pick-up Time</p>
              <p >Drop-off Date</p>
            
            </div>
            <div class="col-lg-4 col-md-4 pr-5 col-sm-5 bg-light hideclass">
              <p><i class="fas fa-caret-right"></i>{{$order->pickup_date}}</p>
              <p><i class="fas fa-caret-right"></i>{{$order->pickup_time}} - {{$order->pickup_time_am}}</p>
              <p><i class="fas fa-caret-right"></i>{{$order->dropoff_date}}</p>
            </div>

          </div>
          <div class="d-flex justify-content-center bg-light" id="showmore">
            <i class="fas fa-chevron-down"></i></div>
       
        </div>
      </div>
    </div>
     
              @endforeach


  </div>
</div>


@endsection
