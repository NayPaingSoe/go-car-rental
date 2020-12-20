<?php

namespace App\Http\Controllers\frontend;

use App\City;
use App\User;
use App\Order;
use App\Driver;
use App\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.driver.index_order');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $divisions=Division::all();
        // dd($divisions);
        return view('frontend.driver.driver_register',compact('divisions'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name'=>'required',
            'driverphoto'=>'required',
            'phone'=>'required',
            'licencephoto'=>'required',
            'price'=>'required',
            'email'=>'required|unique:users'
        ]);
       $phone=$request->phone;
        $driverimageName = time().'.'.$request->driverphoto->extension();
        $request->driverphoto->move(public_path('images/driver'),$driverimageName);
        $driverfilepath= 'images/driver/'.$driverimageName;

        $licenceimageName = time().'.'.$request->licencephoto->extension();
        $request->licencephoto->move(public_path('images/licence'),$licenceimageName);
        $licencefilepath= 'images/licence/'.$licenceimageName;

         $carimageName = time().'.'.$request->carphoto->extension();
        $request->carphoto->move(public_path('images/car'),$carimageName);
        $carfilepath= 'images/car/'.$carimageName;

        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->pwd);
        $user->save();


        $driver=new Driver;
        $driver->name=$request->name;
        $driver->driverphoto=$driverfilepath;
        $driver->licencephoto=$licencefilepath;
        $driver->carphoto=$carfilepath;
        $driver->phone=$phone;
        $driver->cartype=$request->type;
        $driver->carno=$request->carno;
        $driver->cardetail=$request->details;
        $driver->price=$request->price;
        $driver->city_id=$request->city;
        $driver->division_id=$request->homedivision;
        $driver->busy=0;
        $driver->travelablecity=$request->division;
       // dd($request->division);
         if ($request->division==null) 
            {
                $driver->travelablecity=0;
            }
        else
            {  
                $driver->travelablecity=1;
            }  
        $driver->noofseats=$request->seat;
        $driver->user_id=$user->id;
        $driver->save();
       
        $itemString=$request->division;
        //dd($itemString);    
        $driver->divisions()->attach($itemString);


       //  dd($driver);
        $user->assignRole('driver');

        
        // return $user;
       // return view ('frontend.driver.policy');
        return view ('auth.login');
     
    }


    public function citybydivision(Request $request)
    {
        
        // dd(request('id'));   
        $id=request('id');
       // dd($id);
        $cities=City::where('division_id',$id)->get();
        // dd($cities);
       return $cities;
    }

    public function policy()
    {
        
        return view('frontend.driver.policy');
    }
}
