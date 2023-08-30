<?php

namespace App\Http\Controllers\Vendor;

use App\Models\Home;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'show' =>  'required|max:30',
            'home_type' =>  'required|max:30',
            'status' =>  'required|max:20',
            'rooms_number' =>  'required|max:20',
            'bathrooms_number' =>  'required|max:20',
            'kitchen_number' => 'required|max:20',
            'balcony' =>  'required|max:20',
            'loung' =>  'required|max:20',
            'area' =>  'required|max:20',
            'land_area' =>  'required|max:20',
            'extras' =>  'required|max:500',
            'price' =>  'required|max:20',
            'city' => 'required|max:30',
            'address' => 'required|max:100',
            'ad_duration_per_day' =>  'required|max:20',
            'description' =>  'required|max:500',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'mobile' => 'required|max:20',
            'email' =>  'required|email',
        ]);
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/homes'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Home::create($validate);
        return redirect()->route('homes.index');
    }

}
