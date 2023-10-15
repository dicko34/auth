<?php

namespace App\Http\Controllers\Admin;

use App\Models\Guide;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\AdvertiserInfo;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.guides.index')->with("guides",Guide::all());
    }

    public function new()
    {
        $date = Carbon::today()->subDays(30);
        $guideguides = Guide::where('created_at','>=',$date)->get();
        return view('admin.guides.new')->with('guides',$guides);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guides.create');
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
            'title' =>  'required|max:100',
            'description' =>  'required|max:500',
            'city' => 'required|max:100',
            'img'=> '',
            'img.*'=> 'image|mimes:jpeg,png,jpg,gif,svg',
            'ad_duration_per_day' =>  'required|max:20',
            'facebook_url' => 'required',
            'advertiser_name' => ['max:20'],
            'phone_number' => ['max:20'],
            'mobile' => ['max:20'],
            'email' => ['max:50', 'email'],]);

        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(config('app.image_path')('Guides'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Guide::create($validate);
        return redirect()->route('admin.guides.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guide = Guide::find($id);
        return view('admin.guides.show')->with('guide',$guide);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.guides.edit')->with("guide",Guide::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guide $guide )
    {
        $uploaded_imgs = explode(',',$guide->img);
        $validate = $request->validate([
            'title' =>  'required|max:100',
            'description' =>  'required|max:500',
            'city' => 'required|max:100',
            
            'img.*'=> 'image|mimes:jpeg,png,jpg,gif,svg',
            'ad_duration_per_day' =>  'required|max:20',
            'facebook_url' => 'required',
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
        ], );
        if(isset($validate['img']) && !empty( $validate['img'])) {
            $imgs = $request->file('img');
            $validate['img'] = [];
            foreach($uploaded_imgs as $img_path ) {
                \unlink(config('app.image_path')('guides').'/'.$img_path); 
            }
            foreach($imgs as $file_image ) {
                $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
                $file_image->move(config('app.image_path')('guides'), $imageName); // move the new img 
                array_push($validate['img'],$imageName); // store image name to db
               // dd($imageName);
            }
            $validate['img'] = implode(',',$validate['img']);
        } else {
            $validate['img'] = implode(',',$uploaded_imgs);
        }
        
        $guide->update($validate );
       return  redirect()->route('admin.guides.index',['data' => "guides $request->advertiser_name updated successfully"]);
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
    public function changeState(Request $request,Guide $guide)
    {
        $action = $request->query("action");
        $guide->update(['state' =>$action] );
    
        return  redirect()->route('admin.guides.index');
        
    }
}
