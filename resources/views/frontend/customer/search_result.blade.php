@extends('frontend.customer.master')
@section('content')

<div class="bodybg">
	<div class="my-5 text-center">
		<img src="{{asset('frontendtemplate/images/icon3.svg')}}" class="img-fluid card-img" style="width: 60px;">
		<h2>Find Your Favorite Car Here</h2>
	</div>

	<div class="container my-5" >

		{{--		foreach   --}}

	@if(sizeof($usersdriver)>0)
	@foreach($usersdriver as $sameone)
	<div class=" no-gutters my-5" >
		<div class="row mt-5 ">
			<div class="col-lg-3 col-md-3 col-sm-3" >
				<img src="{{asset($someone->carphoto)}}" class="img-fluid card-img " style="width:200px;">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="text-center">
					<i class="fas fa-user-alt" id="icon"></i>
					<p>{{$sameone->name}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="text-center">
					<i class="fas fa-phone-alt" id="icon"></i>
					<p>{{$sameone->phone}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3" >
				<div class="text-center">
					<i class="fas fa-car" id="icon"></i>
					<p>{{$sameone->cartype}}</p>
				</div>
			</div>
		</div>
		<div class="row mb-3">
		
			<div class="cardetail col-lg-4 col-md-4 col-sm-4">
				<div class="text-center">
					<i class="fas fa-home" id="icon"></i>
					<p>{{$sameone->division_id}}</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 cardetail">
				<div class="text-center">
					<i class="fas fa-money-bill" id="icon"></i>
					<p>{{$sameone->price}}(per day)</p>
				</div>
			</div>
			<div class="cardetail col-lg-4 col-md-4 col-sm-4">
				<div class="text-center">
					<i class="fas fa-money-bill" id="icon"></i>
					<p>{{$sameone->price * $interval}}</p>
				</div>

			</div>

			<div class=" col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end">
				<a href=""><button class="cardetails btn btn-info m-1" >Details</button></a>
				<a href=""><button type="submit"  class="btn btn-info m-1" data-toggle="modal" data-target="#myModal2" style="width: 80px;" data-driver_id="{{$sameone->id}}" data-cartype="{{$sameone->cartype}}" data-total="{{$sameone->price * $interval}}" data-user_id="{{Auth::user()->id}}" data-pickupdivision="{{$userorderdetails[0]}}" data-pickupcity="{{$userorderdetails[1]}}" data-dropoffdivision="{{$userorderdetails[2]}}" data-dropoffcity="{{$userorderdetails[3]}}" data-pickupdate="{{$userorderdetails[4]}}" data-dropdate="{{$userorderdetails[5]}}" data-pickuptime="{{$userorderdetails[6]}}" data-pickuptimeam="{{$userorderdetails[7]}}" >Order</button></a>
			</div>
		</div>
	</div>
	@endforeach
	@endif

	{{--		foreach   --}}

	@if(sizeof($samedivision)>0)
	@foreach($samedivision as $samezero)
	<div class=" no-gutters my-5">


		<div class="row mt-5">
			<div class="col-lg-3 col-md-3 col-sm-3" >
				<img src="{{asset($samezero->carphoto)}}" class="img-fluid card-img " style="width:200px;">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="text-center">
					<i class="fas fa-user-alt" id="icon"></i>
					<!-- <i class="fas fa-car" id="icon"></i> -->
					<p>{{$samezero->name}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="text-center">
					<i class="fas fa-phone-alt" id="icon"></i>
					<p>{{$samezero->phone}}</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3" >
				<div class="text-center">
					<i class="fas fa-car" id="icon"></i>
					<p>{{$samezero->cartype}}</p>
				</div>
			</div>
		</div>
		<div class="row mb-3">
		
				<div class="cardetail col-lg-4 col-md-4 col-sm-4">
					<div class="text-center">
						<i class="fas fa-home" id="icon"></i>
						<p>{{$samezero->division_id}}</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 cardetail">
					<div class="text-center">
						<i class="fas fa-money-bill" id="icon"></i>
						<p>{{$samezero->price }}(per day)</p>
					</div>
				</div>
				<div class="cardetail col-lg-4 col-md-4 col-sm-4">
					<div class="text-center">
						<i class="fas fa-money-bill" id="icon"></i>
						<p>{{$samezero->price * $interval}}(total)</p>
					</div>
				</div>

			<div class=" col-lg-12 col-md-12 col-sm-12 d-flex justify-content-end">
				<button class="cardetails btn btn-info m-1">Details</button>
				<button type="submit" class="btn btn-info m-1 " data-toggle="modal" data-target="#myModal2" style="width: 80px;" data-driver_id="{{$samezero->id}}" data-cartype="{{$samezero->cartype}}" data-total="{{$samezero->price * $interval}}" data-user_id="{{Auth::user()->id}}" data-pickupdivision="{{$userorderdetails[0]}}" data-pickupcity="{{$userorderdetails[1]}}" data-dropoffdivision="{{$userorderdetails[2]}}" data-dropoffcity="{{$userorderdetails[3]}}" data-pickupdate="{{$userorderdetails[4]}}" data-dropdate="{{$userorderdetails[5]}}" data-pickuptime="{{$userorderdetails[6]}}" data-pickuptimeam="{{$userorderdetails[7]}}" >Order</button>
			</div>
		</div>
	</di>
		@endforeach
		@endif

	</div>
</div>


	<div id="myModal2" class="modal fade" role="dialog" >
		<div class="modal-dialog">

			<div class="modal-content modalbg">
				<div class="modal-header justify-content-center">
					<h3 class="modal-title">Order Accept</h3>
					<!-- <button type="button" class="close text-white" data-dismiss="modal">&times;</button> -->
				</div>
				<div class="modal-body">
					<p>We will reply to you soon.</p>
					<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
					<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
					<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
					<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
					<img src="{{asset('frontendtemplate/images/reply.svg')}}" class="img-fluid" width="30">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
	


	<script type="text/javascript">
		$(document).ready(function(){
			$(".cardetail").hide();
			$(".cardetails").click(function(){
				$(".cardetail").toggle('slow');
			});
			$(".order").click(function(){
				$(this).css({"background-color":"#02457A","border-color":"#02457A"});
				$(this).html("Ordered");
				var user_id = $(this).data('user_id');
				var driver_id = $(this).data('driver_id');
				var cartype = $(this).data('cartype');
				var total = $(this).data('total');
				var pickupdivision = $(this).data('pickupdivision');
				var pickupcity = $(this).data('pickupcity');
				var dropoffdivision = $(this).data('dropoffdivision');
				var dropoffcity = $(this).data('dropoffcity');
				var pickupdate = $(this).data('pickupdate');
				var dropdate = $(this).data('dropdate');
				var pickuptime = $(this).data('pickuptime');
				var pickuptimeam = $(this).data('pickuptimeam');
				console.log(driver_id);
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$.post("/requestorder",{
					user_id:user_id,
					driver_id:driver_id,
					cartype:cartype,
					pickupdivision:pickupdivision, 
					pickupcity: pickupcity,
					dropoffdivision:dropoffdivision,
					dropoffcity:dropoffcity,
					pickupdate:pickupdate,
					dropdate:dropdate,
					pickuptime:pickuptime,
					pickuptimeam:pickuptimeam,
					total:total
				},function(res){
					
				});
			});
		});
	</script>
	@endsection

