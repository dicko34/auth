<?php

namespace App\Http\Controllers\Admin;

use App\Models\Land;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\AdvertiserInfo;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class landController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.lands.index')->with("lands",Land::all());
    }

    public function new()
    {
        $date = Carbon::today()->subDays(30);
        $lands = Land::where('created_at','>=',$date)->get();
        return view('admin.lands.new')->with('lands',$lands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lands.create');
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
            'brief' =>  'required|max:30',
            'area' =>  'required|max:30',
            'price' =>  'required|max:20',
            'located_on' =>  'required|max:30',
            'features' =>  'required',
            'features.*' =>  'required|max:200',
            'surrounded_by' =>  'required|max:50',
            'description' =>  'required|max:1500',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'city' => 'required|max:30',
            'ad_duration_per_day' =>  'required|max:20',
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
        ]);
        $features = $request->features;

        // Convert the array to a comma-separated string
        $featuresString = implode(',', $features);

        $validate['features'] = $featuresString;
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/lands'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Land::create($validate);
        return redirect()->route('admin.lands.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $land = Land::find($id);
        return view('admin.lands.show')->with('land',$land);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.lands.edit')->with("land",Land::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Land $land )
    {
        $uploaded_imgs = explode(',',$land->img);
         $validate = $request->validate([
            'brief' =>  'required|max:30',
            'area' =>  'required|max:30',
            'price' =>  'required|max:20',
            'located_on' =>  'required|max:30',
            'features' =>  'required',
            'features.*' =>  'required|max:200',
            'surrounded_by' =>  'required|max:50',
            'description' =>  'required|max:1500',
            'img'=> 'nullable',
            'img.*'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'city' => 'required|max:30',
            'ad_duration_per_day' =>  'required|max:20',
            'address' => 'required|max:100',            
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
        ]);
        $features = $request->features;

        // Convert the array to a comma-separated string
        $featuresString = implode(',', $features);

        $validate['features'] = $featuresString;
        if(isset($validate['img']) && !empty( $validate['img'])) {
            $imgs = $request->file('img');
            $validate['img'] = [];
            foreach($uploaded_imgs as $img_path ) {
                \unlink(public_path('assets/site/images/lands').'/'.$img_path); 
            }
            foreach($imgs as $file_image ) {
                $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
                $file_image->move(public_path('assets/site/images/lands'), $imageName); // move the new img 
                array_push($validate['img'],$imageName); // store image name to db
               // dd($imageName);
            }
            $validate['img'] = implode(',',$validate['img']);
    
        } else {
            $validate['img'] = implode(',',$uploaded_imgs);
        }
        
        $land->update($validate );
       return  redirect()->route('admin.lands.index',['data' => "lands $request->advertiser_name updated successfully"]);
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
    public function changeState(Request $request,Land $land)
    {
        $action = $request->query("action");
        $land->update(['state' =>$action] );
    
        return  redirect()->route('admin.lands.index');
        
    }
}
