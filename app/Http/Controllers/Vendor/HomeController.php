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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.homes.index')->with("homes",Home::all());
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
            'show' =>  'required|max:30',
            'home_type' =>  'required|max:30',
            'status' =>  'required|max:20',
            'rooms_number' =>  'required|max:20',
            'bathrooms_number' =>  'required|max:20',
            'kitchen_number' => 'required|max:20',
            'loung' =>  'required|max:20',
            'area' =>  'required|max:20',
            'land_area' =>  'required|max:20',
            'price' =>  'required|max:20',
            'gov' =>  'required|max:20',
            'city' => 'required|max:30',
            'street' =>  'required|max:20',
            'address' => 'required|max:100',
            'ad_durtion_per_day' =>  'required|max:20',
            'extras' =>  'required|max:200',
            'description' =>  'required|max:500',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
            $file_image->move(public_path('assets/site/images/homes'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Home::create($validate);
        return redirect()->route('vendor.homes.index');
    }

    public function search(Request $request)
     {
        $homes = Home::all();
         $homes_show = Home::where(
            [['city',$request->city == 'الكل'? '!=': '='  ,$request->city == 'الكل' ? null : $request->city ],
            ['address',$request->address == 'الكل'? '!=': '='  ,$request->address == 'الكل' ? null : $request->address ],
            ['street',$request->street == 'الكل'? '!=': '='  ,$request->street == 'الكل' ? null : $request->street ],
            ['home_type',$request->home_type == 'الكل'? '!=': '='  ,$request->home_type == 'الكل' ? null : $request->home_type ],
            ['rooms_number',$request->rooms_number == 'الكل'? '!=': '='  ,$request->rooms_number == 'الكل' ? null : $request->rooms_number ],
            ['status',$request->status == 'الكل'? '!=': '='  ,$request->status == 'الكل' ? null : $request->status ],
            ['show',$request->show == 'الكل'? '!=': '='  ,$request->show == 'الكل' ? null : $request->show ],]
        )->get();
        return view('vendor.homes.index',compact('homes_show','homes'));
     }
}
