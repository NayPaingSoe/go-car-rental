<!DOCTYPE html>
<html>
<head>
    <title>Go</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="icon" type="text/css" href="{{asset('frontendtemplate/images/icon3.svg')}}" >

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bootstrap/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/fontawesome/css/all.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/font.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/select2.min.css')}}">

    <script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/jquery.min.js')}}"></script>



    <script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontendtemplate/js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontendtemplate/js/select2.min.js')}}"></script>
</head>

<body> 

<wrapper class="d-flex flex-column">
    <nav class="navbar navbar-dark" style="height: 80px; background-color: #0d4a4e;">

        <div class="container-fluid">


            <div class="d-flex flex-grow-1">
            <a href="#">
                <img src="{{asset('frontendtemplate/images/go_logo.png')}}" height="100">

                <span id="car" style="position: absolute;">
                    <img src="{{asset('frontendtemplate/images/car.svg')}}" height="100">
                </span>

            </a>
            </div>

        

    @role('driver')
        <a href="{{route('yourorder')}}">
          <button class="btn text-white" style="border-bottom: #07cffd solid 3px;">Your Orders</button>
        </a>

      <a href="{{route('driverindex.index')}}">
          <button class="btn text-white m-2" style="border-bottom: #07cffd solid 3px;">Pending Lists</button>
        </a>

        <a href="{{route('policy')}}">
          <button class="btn text-white" style="border-bottom: #07cffd solid 3px;">Policy</button>
        </a>
    <ul class="m-2 list-unstyled">
        <!-- Authentication Links -->
        @guest
        @else   
        <div id="username">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre >
                    <span style="border-radius: 100px; background-color: #fff; padding: 9px;color: #000;">{{ Auth::user()->initials() }} </span>
                    <span class="caret"></span>
                </a>
                

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
            </div>
            </li>
        </div>

        
        @endguest
    </ul>
    @else
            <a href="{{route('login')}}">
                <button class="btn text-white" style="border-bottom: #07cffd solid 3px;">Login</button>
            </a>

            <button class="btn text-white m-3" style="border-bottom: #07cffd solid 3px;" data-toggle="modal" data-target="#myModal">
              Register
            </button>
    @endrole
       <div id="myModal" class="modal fade " role="dialog" >
                <div class="modal-dialog ">

                  <div class="modal-content modalbg bordermdal">
                    <div class="modal-header justify-content-center">
                      <h3 class="modal-title">Registration Form</h3>
                    </div>
                    <div class="modal-body d-flex justify-content-center" id="link">
                      <a href="{{route('register')}}" style="background-color: #e8f6f9; border-radius: 10px;" class="m-2 p-1"><button class="btn" >Register for Customer</button></a>
                      <a href="{{route('driverform')}}" class="m-2 p-1" style="background-color: #e8f6f9; border-radius: 10px;">
                        <button class="btn">Register for Driver</button></a>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </nav>

    @yield('content')
 
    <footer class="fixed-bottom" style="background-color: #0d4a4e; text-align: center;">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-12 ">
                    <p class="text-white pt-3">Made this Project with my Team</p>
                </div>
            </div>  
        </div>
    </footer>
</wrapper>


    @yield('script')

</body>
    
</html>

