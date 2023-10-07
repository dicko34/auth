<?php

namespace App\Http\Controllers\Admin;
use App\Models\Cars;
use Illuminate\Support\Str;
use App\Models\CarCompanies;
use Illuminate\Http\Request;
use App\Rules\AdvertiserInfo;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.cars.index')->with("cars", Cars::all());
    }

    public function new()
    {
        $date = Carbon::today()->subDays(30);
        $cars = Cars::where('created_at','>=',$date)->get();
        return view('admin.cars.new')->with('cars',$cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carCompanies = CarCompanies::all();
        return view('admin.cars.create',compact('carCompanies'));
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
            'model' =>  'nullable|max:30',
            'company' =>  'max:30',
            'reset_model' =>  'nullable|max:20',
            'model_year' =>  'required|max:20',
            'car_color' =>  'required|max:20',
            'power' => 'required|max:20',
            'passengers' =>  'required|max:20',
            'car_usage' => 'required|max:50',
            'drive_type' =>  'required|max:20',
            'speedmotors' =>  'required|max:20',
            'origin' =>  'required|max:20',
            'price' =>  'required|max:20',
            'ad_duration_per_day' =>  'required|max:20',
            'driving_license' => 'required|max:30',
            'fuel_type' =>  'required|max:20',
            'lime_type' => 'required|max:20',
            'glass' =>  'required|max:20',
            'shown' => 'required|max:20',
            'pay_method' =>  'required|max:20',
            'extras' =>  'required|max:500',
            'address' => 'required|max:100',
            'description' =>  'required|max:600',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'advertiser_name' => [
                New AdvertiserInfo(), 'max:20'
            ],
            'phone_number' => [
                New AdvertiserInfo(), 'max:20'
            ],
            'mobile' => [
                New AdvertiserInfo(), 'max:20'
            ],
            'email' =>  [
                New AdvertiserInfo(), 'max:50','email'
            ],
            'city' => [
                New AdvertiserInfo(), 'max:20'
            ],
        ], [
            'img.required' => 'The image field is required.',
            'img.*.required' => 'Please select an image.',
            'img.*.image' => 'Please select a valid image file.',
            'img.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
        ],);
        $extras = $request->extras;

        // Convert the array to a comma-separated string
        $extrasString = implode(',', $extras);

        $validate['extras'] = $extrasString;
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(config('app.image_path')('cars'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Cars::create($validate);
       
        return redirect()->route('admin.cars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Cars::find($id);
        return view('admin.cars.show')->with('car',$car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Cars::find($id);
        $carCompanies = CarCompanies::all();
        return view('admin.cars.edit',compact('carCompanies','car'));
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
        $uploaded_imgs = explode(',',$car->img);
        $validate = $request->validate([
            'model' =>  'nullable|max:30',
            'company' =>  'max:30',
            'reset_model' =>  'nullable|max:20',
            'model_year' =>  'required|max:20',
            'car_color' =>  'required|max:20',
            'power' => 'required|max:20',
            'passengers' =>  'required|max:20',
            'car_usage' => 'required|max:50',
            'drive_type' =>  'required|max:20',
            'speedmotors' =>  'required|max:20',
            'origin' =>  'required|max:20',
            'price' =>  'required|max:20',
            'ad_duration_per_day' =>  'required|max:20',
            'driving_license' => 'required|max:30',
            'fuel_type' =>  'required|max:20',
            'lime_type' => 'required|max:20',
            'glass' =>  'required|max:20',
            'shown' => 'required|max:20',
            'pay_method' =>  'required|max:20',
            'extras' =>  'required|max:500',
            'address' => 'required|max:100',
            'description' =>  'required|max:600',
            'img'=> 'nullable',
            'img.*'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'advertiser_name' => [
                New AdvertiserInfo(), 'max:20'
            ],
            'phone_number' => [
                New AdvertiserInfo(), 'max:20'
            ],
            'mobile' => [
                New AdvertiserInfo(), 'max:20'
            ],
            'email' =>  [
                New AdvertiserInfo(), 'max:50','email'
            ],
            'city' => [
                New AdvertiserInfo(), 'max:20'
            ],
        ], [
            'img.required' => 'The image field is required.',
            'img.*.required' => 'Please select an image.',
            'img.*.image' => 'Please select a valid image file.',
            'img.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
        ]);
        $extras = $request->extras;

        // Convert the array to a comma-separated string
        $extrasString = implode(',', $extras);

        $validate['extras'] = $extrasString;
        if(isset($validate['img']) && !empty( $validate['img'])) {
            $imgs = $request->file('img');
            $validate['img'] = [];
            foreach($uploaded_imgs as $img_path ) {
                \unlink(config('app.image_path')('cars').'/'.$img_path); 
            }
            foreach($imgs as $file_image ) {
                $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
                $file_image->move(config('app.image_path')('cars'), $imageName); // move the new img 
                array_push($validate['img'],$imageName); // store image name to db
            }
            $validate['img'] = implode(',',$validate['img']);
    
        } else {
            $validate['img'] = implode(',',$uploaded_imgs);
        }
       
        $car->update($validate);
        return  redirect()->route('admin.cars.index',['data' => "user $request->name updated successfully"]);
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
    public function changeState(Request $request,Cars $car)
    {
        $action = $request->query("action");
        $car->update(['state' =>"$action"] );
    
        return   redirect()->route('admin.cars.index');
        
    }
}
