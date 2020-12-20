@extends('frontend.driver.master')

@section('pending')
<button class="btn navbtn active">
  <a href="{{route('driverindex.index')}}">Pending Lists</a>
</button>
@endsection

@section('check')
<button class="btn navbtn">
  <a href="{{route('yourorder')}}">Your Lists</a>
</button>
@endsection

@section('policy')
<button class="btn navbtn">
  <a href="{{route('policy')}}">Policy</a>
</button>
@endsection


@section('content')
<div class="container-fluid" class="img-fluid" id="img" style="background-image: url('{{asset('frontendtemplate/images/driver1.jpg')}}'); min-height: 100vh;">
  <div class="my-4 text-center">
    <h2 class="" style="color: #0d4a4e;"><strong class=" p-2" style="border-radius: 10px;">Pending Lists</strong></h2>
  </div>

  <div class="container">

    @foreach($orders as $order)

    <div class="no-gutters mb-5" style="border-radius: 10px; background-color: rgba(255,255,255,0.6);">
      <div class="row m-5 p-5">

        <div class="col-lg-6 col-md-6 col-sm-2">
          <b>Customer Name</b>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-2">
          <p><i class="fas fa-caret-right"></i><b> {{$order->user->name}}</b></p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-2">
          <b>Pick-up Place</b>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-2">
          <p><i class="fas fa-caret-right"></i> <b>
              {{$order->pickup_city_name->name}}
              /
              {{$order->pickup_city_name->division->name}}
            </b></p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-2">
          <b>Drop-off Place</b>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-2">
          <p><i class="fas fa-caret-right"></i> <b>
              {{$order->dropoff_city_name->name}}
              /
              {{$order->dropoff_city_name->division->name}}
            </b></p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-2">
          <b>Price</b>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-2">
          <p><i class="fas fa-caret-right"></i> <b>{{$order->total_price}}</b></p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-2">
          <b>Pick-up Date</b>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-2">
          <p><i class="fas fa-caret-right"></i> <b>{{$order->pickup_date}}</b></p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-2">
          <b>Pick-up Time</b>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-2">
          <p><i class="fas fa-caret-right"></i> <b>{{$order->pickup_time}} {{$order->pickup_time_am}}</b></p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-2">
          <b>Drop-off Date</b>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-2">
          <p><i class="fas fa-caret-right"></i> <b>{{$order->dropoff_date}}</b></p>
        </div>

        <div class="btn col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end">
          <a href="{{route('cancle',$order->id)}}" onclick="return confirm('are you sure to reject?')" class="btn btn-danger m-1 rounded " style="height: 40px;">Cancle</a>
          <a href="{{route('statusone',$order->id)}}" class="btn btn-info m-1 rounded" style="height: 40px;">Accept </a>
        </div>

      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection