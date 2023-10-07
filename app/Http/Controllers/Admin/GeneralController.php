<?php

namespace App\Http\Controllers\Admin;

use App\Models\General;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\AdvertiserInfo;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.generals.index')->with("generals",General::all());
    }

    public function new()
    {
        $date = Carbon::today()->subDays(30);
        $general = General::where('created_at','>=',$date)->get();
        return view('admin.generals.new')->with('generals',$general);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.generals.create');
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
            'address' =>  'required|max:100',
            'category' =>  'required|max:50',
            'price' =>  'required|max:20',
            'description' =>  'required|max:500',
            'img'=> 'required',
            'img.*'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
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
        ], [
            'img.required' => 'The image field is required.',
            'img.*.required' => 'Please select an image.',
            'img.*.image' => 'Please select a valid image file.',
            'img.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
        ]);
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(config('app.image_path')('generals'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        General::create($validate);
        return redirect()->route('admin.generals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $general = General::find($id);
        return view('admin.generals.show')->with('general',$general);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.generals.edit')->with("general",General::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, General $general )
    {
        $uploaded_imgs = explode(',',$general->img);
        $validate = $request->validate([
            'address' =>  'required|max:100',
            'category' =>  'required|max:50',
            'price' =>  'required|max:20',
            'description' =>  'required|max:500',
            'img'=> 'nullable',
            'img.*'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
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
        ], [
            'img.required' => 'The image field is required.',
            'img.*.required' => 'Please select an image.',
            'img.*.image' => 'Please select a valid image file.',
            'img.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
        ]);
        if(isset($validate['img']) && !empty( $validate['img'])) {
            $imgs = $request->file('img');
            $validate['img'] = [];
            foreach($uploaded_imgs as $img_path ) {
                \unlink(config('app.image_path')('generals').'/'.$img_path); 
            }
            foreach($imgs as $file_image ) {
                $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
                $file_image->move(config('app.image_path')('generals'), $imageName); // move the new img 
                array_push($validate['img'],$imageName); // store image name to db
            }
            $validate['img'] = implode(',',$validate['img']);
    
        } else {
            $validate['img'] = implode(',',$uploaded_imgs);
        }
        
        $general->update($validate );
       return  redirect()->route('admin.generals.index',['data' => "general $request->advertiser_name updated successfully"]);
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
    public function changeState(Request $request,General $general)
    {
        $action = $request->query("action");
        $general->update(['state' =>$action] );
    
        return  redirect()->route('admin.generals.index');
        
    }
}
