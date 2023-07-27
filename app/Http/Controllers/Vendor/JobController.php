<?php

namespace App\Http\Controllers\Vendor;

use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class jobController extends Controller
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
            'specialization' =>  'required|max:30',
            'workplace' =>  'required|max:30',
            'night_work' =>  'required|max:20',
            'permanence' =>  'required|max:30',
            'description' =>  'required|max:500',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'ad_durtion_per_day' =>  'required|max:20',
            'advertiser_name' => 'required|max:30',
            'phone_number' =>  'required|max:20',
            'mobile' => 'required|max:20',
            'email' =>  'required|email',
            'advertiser_city' =>  'required|max:20',
            'advertiser_address' => 'required|max:100'
        ]);
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/jobs'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Job::create($validate);
        return redirect()->route('job.index');
    }

   
}
