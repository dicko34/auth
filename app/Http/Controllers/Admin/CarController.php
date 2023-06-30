<?php

namespace App\Http\Controllers\Admin;
use App\Models\Cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cars.index');
    }

    public function new()
    {
        return view('admin.cars.new');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'model' =>  'required|max:30',
            'company' =>  'required|max:30',
            'reset_model' =>  'required|max:20',
            'model_year' =>  'required|max:20',
            'car_color' =>  'required|max:20',
            'power' => 'required|max:20',
            'passengers' =>  'required|max:20',
            'drive_type' =>  'required|max:20',
            'speedmotors' =>  'required|max:20',
            'origin' =>  'required|max:20',
            'price' =>  'required|max:20',
            'ad_durtion_per_day' =>  'required|max:20',
            'driving_license' => 'required|max:20',
            'fuel_type' =>  'required|max:20',
            'lime_type' => 'required|max:20',
            'glass' =>  'required|max:20',
            'shown' => 'required|max:20',
            'pay_method' =>  'required|max:20',
            'extras' =>  'required|max:200',
            'description' =>  'required|max:500',
            'img'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'mobile' => 'required|max:20',
            'email' =>  'required|email|unique:cars',
            'city' =>  'required|max:20',
            'address' => 'required|max:100'
        ]);
        $imageName = $request->file('img')->getClientOriginalName();
        $validate['password'] =  Hash::make($request->password);
        $validate['img']->move(public_path('assets/site/images/cars'), $imageName); // move the new img 
        $validate['img']=$imageName; // store image name to db
        Cars::create($validate );
        return dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.cars.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.cars.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cars $car )
    {
        $validate = $request->validate([
            'model' =>  'required|max:30',
            'company' =>  'required|max:30',
            'reset_model' =>  'required|max:20',
            'model_year' =>  'required|max:20',
            'car_color' =>  'required|max:20',
            'power' => 'required|max:20',
            'passengers' =>  'required|max:20',
            'drive_type' =>  'required|max:20',
            'speedmotors' =>  'required|max:20',
            'origin' =>  'required|max:20',
            'price' =>  'required|max:20',
            'ad_durtion_per_day' =>  'required|max:20',
            'driving_license' => 'required|max:20',
            'fuel_type' =>  'required|max:20',
            'lime_type' => 'required|max:20',
            'glass' =>  'required|max:20',
            'shown' => 'required|max:20',
            'pay_method' =>  'required|max:20',
            'lime_type' => 'required|max:20',
            'extras' =>  'required|max:200',
            'description' =>  'required|max:500',
            'img'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'mobile' => 'required|max:20',
            'email' =>  'required|email|unique:cars',
            'city' =>  'required|max:20',
            'address' => 'required|max:100'
        ]);
        $imageName = $request->file('img')->getClientOriginalName();
        $image_path = public_path('assets/site/images/cars').'/'.$car->img;
        \unlink($image_path); // remove the old img from db
        $validate["password"] =  Hash::make($request->password);
        $validate['img']->move(public_path('assets/site/images/cars'), $imageName); // move the new img 
        $validate['img']=$imageName; // store image name to db
       $car->update($validate );
      // return $request->only('email', 'password');
       return  redirect()->route('admin.cars.index',['data' => "user $request->name update successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
