@extends('frontend.driver.master')
 
@section('pending')
  <button class="btn navbtn"> 
    <a href="{{route('driverindex.index')}}">Pending Lists</a>
  </button>
@endsection

@section('check')
  <button class="btn navbtn">
    <a href="{{route('yourorder')}}">Your Lists</a>
  </button>
@endsection
   
@section('policy')     
  <button class="btn navbtn active">
    <a href="{{route('policy')}}">Policy</a>
  </button>
@endsection


@section('content')
<div class="img-fluid" id="img" style="background-image: url('{{asset('frontendtemplate/images/driver1.jpg')}}'); min-height: 100vh;">
<div class="container-fluid mt-5">
	<div class="card container p-4 bodybg" style="border-radius: 10px;">
		<p class="text-center " style="font-size: 30px;">Our Policy</p>
		<div class="d-flex justify-content-center">
			<div class="col-lg-5">
				<p><i class="fa fa-star" aria-hidden="true"></i> In one order, we will substract 20% from your amount</p>
				<p><i class="fa fa-star" aria-hidden="true"></i> In one order, we will substract 20% from your amount</p>
				<p><i class="fa fa-star" aria-hidden="true"></i> In one order, we will substract 20% from your amount</p>
			</div>
		</div>
	</div>
</div>
</div>
@endsection