@extends('frontend.customer.master')

@section('searchbtn')
<button class="btn navbtn active">
  <a href="{{route('home')}}">Search Car</a>
</button>
@endsection

@section('orderbtn')
<button class="btn navbtn">
  <a href="{{route('customeryour_order')}}">Your Order</a>
</button>
@endsection



@section('content')
<div class="img-fluid" id="img" style="background-image: url('{{asset('frontendtemplate/images/car10.jpg')}}'); min-height: 100vh;">
  <div class="container-fluid" >

    <div class="container pb-3 pt-5 d-flex justify-content-center ">
      <div class="col-lg-6 col-md-10 col-sm-10 shadow-lg p-3 mb-5 rounded" style="background-color: rgba(255,255,255,0.6);">

      <div class="card-block"> 
          <h2 class="mb-4 text-center" style="color: #115d63;">Find the Trip you want Here</h2>
          <form action="{{route('customer.searchdriver')}}" method="POST">
            {{csrf_field()}}
            <div class="row">

            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="division"><b>Pick up place/Division</b> </label>
              <select required="required" class="form-control " id="division" name="pickupdivision">
                <option value="">Select Division</option>
                @foreach($division as $row)
                <option value="{{$row->id}}">
                  {{$row->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="city"><b>Pick up place/Township</b> </label>
              <select required="required" class="form-control" id="city" name="pickupcity">
              </select>
             </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
             <div class="p-3">
              <label for="dropoffdivision"><b>Drop off place/Division</b></label>
              <select required="required" class="form-control " id="dropoffdivision" name="dropoffdivision">
                <option value="">Select Division</option>
                @foreach($division as $row)
                <option value="{{$row->id}}">
                  {{$row->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group col-lg-6 col-md-6">
              <div class="p-3">
                <label for="dropoffcity"><b>Drop off place/Township </b></label>
                <select required="required" class="form-control" id="dropoffcity" name="dropoffcity">
                </select>
              </div>
            </div>

              <div class="form-group col-lg-6 col-md-6">
               <div class="p-3">
                <label for="exampleFormControlSelect1"><b>Pick up Date </b></label>
                <select required="required" class="form-control" name="pickupdate" id="exampleFormControlSelect1">
                  <option value="{{date('y-m-d')}}">{{date('M - d')}}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 1day'))
                  }}">{{
                    date("M - d",strtotime('today + 1day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 2day'))
                  }}">{{
                    date("M - d",strtotime('today + 2day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 3day'))
                  }}">{{
                    date("M - d",strtotime('today + 3day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 4day'))
                  }}">{{
                    date("M - d",strtotime('today + 4day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 5day'))
                  }}">{{
                    date("M - d",strtotime('today + 5day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 6day'))
                  }}">{{
                    date("M - d",strtotime('today + 6day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 7day'))
                  }}">{{
                    date("M - d",strtotime('today + 7day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 8day'))
                  }}">{{
                    date("M - d",strtotime('today + 8day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 9day'))
                  }}">{{
                    date("M - d",strtotime('today + 9day'))
                  }}</option>
                </select>
               </div>
              </div>

              <div class="form-group col-lg-3 col-md-6">
               <div class="p-3">
                <label for="exampleFormControlSelect1"><b>Pick up</b> </label>
                <input required="required" type="text" name="pickuptime" class="form-control" placeholder="00:00">
               </div>
              </div>

              <div class="form-group col-lg-3 col-md-6">
               <div class="p-3">
                <label for="exampleFormControlSelect1"><b>Time</b></label>
                <select required="required" class="form-control" name="pickuptimeam" id="exampleFormControlSelect1">
                  <option value="AM">AM</option>
                  <option value="PM">PM</option>
                </select>
                </div>
              </div>

              <div class="form-group col-lg-6 col-md-6">
                <div class="p-3">
                  <label for="dropdate"><b>Drop off Date </b></label>
                  <select required="required" class="form-control" id="dropdate" name="dropdate">
                   <option value="{{date('y-m-d')}}">{{date("M - d")}}</option>
                    <option value="{{
                    date('y-m-d',strtotime('today + 1day'))
                  }}">{{
                    date("M - d",strtotime('today + 1day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 2day'))
                  }}">{{
                    date("M - d",strtotime('today + 2day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 3day'))
                  }}">{{
                    date("M - d",strtotime('today + 3day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 4day'))
                  }}">{{
                    date("M - d",strtotime('today + 4day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 5day'))
                  }}">{{
                    date("M - d",strtotime('today + 5day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 6day'))
                  }}">{{
                    date("M - d",strtotime('today + 6day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 7day'))
                  }}">{{
                    date("M - d",strtotime('today + 7day'))
                  }}</option>
                  <option value="{{
                    date('y-m-d',strtotime('today + 8day'))
                  }}">{{
                    date("M - d",strtotime('today + 8day'))
                  }}</option>
                   <option value="{{
                    date('y-m-d',strtotime('today + 9day'))
                  }}">{{
                    date("M - d",strtotime('today + 9day'))
                  }}</option>
                </select>
              </div>
            </div>

              <div class="mb-4 py-3 px-4 col-lg-12">

@role('customer')
       <button type="submit" class="btn btn-info btn-block">Search</button>
@else
    <a href="{{route('login')}}" class="btn btn-info btn-block">Search</a>
@endrole


              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section ('script')
<script type="text/javascript">
  $(document).ready(function(){

// pickup select divison ajaxSetup
$("#division").change(function(){
  var id=$(this).val();
  // console.log(id);
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.post("/fetch",{id:id},function(res){
    console.log(res);
    var html='';
    jQuery.each(res, function (key, value) {
      // console.log(value.name);
      html+=`<option value="${value.id}">${value.name}</option>`
      $("#city").html(html);
    });
  });
})

// dropoff select divison ajaxSetup
$("#dropoffdivision").change(function(){
  var id=$(this).val();
  // console.log(id);
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.post("/dropfetch",{id:id},function(res){
    var html1='';
    jQuery.each(res, function (key, value) {
       console.log(value.id);
        html1+=`<option value="${value.id}">${value.name}</option>`;
      $("#dropoffcity").html(html1);
    });
  });
})
})
</script>
@endsection


