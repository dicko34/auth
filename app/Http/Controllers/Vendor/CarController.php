<?php

namespace App\Http\Controllers\Vendor;
use App\Models\Cars;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class CarController extends Controller
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
            'driving_license' => 'required|max:30',
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
            'email' =>  'required|email',
            'city' =>  'required|max:20',
            'address' => 'required|max:100'
        ]);

        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/cars'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Cars::create($validate);
       
        return redirect()->route('vendor.cars.index');
    }

    /**
     * Display the searched resource from storage .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
     {
        $cars = Cars::all();
         $cars_show = Cars::where(
            [['company',$request->company == 'الكل'? '!=': '='  ,$request->company == 'الكل' ? null : $request->company ],
            ['model',$request->model == 'الكل'? '!=': '='  ,$request->model == 'الكل' ? null : $request->model ],
            ['city',$request->city == 'الكل'? '!=': '='  ,$request->city == 'الكل' ? null : $request->city ],
            ['fuel_type',$request->fuel_type == 'الكل'? '!=': '='  ,$request->fuel_type == 'الكل' ? null : $request->fuel_type ],
            ['lime_type',$request->lime_type == 'الكل'? '!=': '='  ,$request->lime_type == 'الكل' ? null : $request->lime_type ],
            ['driving_license',$request->driving_license == 'الكل'? '!=': '='  ,$request->driving_license == 'الكل' ? null : $request->driving_license ],]
        )->whereBetween('price',[$request->price_min,$request->price_max])->get();
        return view('vendor.cars.index',compact('cars_show','cars'));
     }
}
