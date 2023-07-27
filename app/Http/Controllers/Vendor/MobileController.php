<?php

namespace App\Http\Controllers\Vendor;

use App\Models\mobile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.mobiles.index')->with("mobiles",Mobile::all());
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
            'device_status' =>  'required|max:30',
            'company' =>  'required|max:30',
            'model' =>  'required|max:20',
            'model_year' =>  'required|integer',
            'reset_model' =>  'required|max:30',
            'slides_number' =>  'required|max:20',
            'screen_size' =>  'required|max:30',
            'cameras' =>  'required|max:30',
            'memory' =>  'required|max:20',
            'storage' =>  'required|max:30',
            'price' =>  'required|max:30',
            'description' =>  'required|max:500',
            'img'=> 'nullable',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'ad_duration_per_day' =>  'required|max:20',
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'email' =>  'required|email',
            'advertiser_city' =>  'required|max:20',
            'advertiser_address' => 'required|max:100'
        ]);
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/mobiles'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Mobile::create($validate);
        return redirect()->route('mobile.index');
    }

    
}
