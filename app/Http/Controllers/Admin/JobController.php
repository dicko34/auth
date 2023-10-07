<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Rules\AdvertiserInfo;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class jobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.jobs.index')->with("jobs",Job::all());
    }

    public function new()
    {
        $date = Carbon::today()->subDays(30);
        $jobs = Job::where('created_at','>=',$date)->get();
        return view('admin.jobs.new')->with('jobs',$jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
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
            'specialization' =>  'required|max:30',
            'workplace' =>  'required|max:30',
            'night_work' =>  'required|max:20',
            'permanence' =>  'required|max:30',
            'address' => 'required|max:100',
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
            $file_image->move(config('app.image_path')('jobs'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Job::create($validate);
        return redirect()->route('admin.jobs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('admin.jobs.show')->with('job',$job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.jobs.edit')->with("job",Job::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job )
    {
        $uploaded_imgs = explode(',',$job->img);
        $validate = $request->validate([
            'specialization' =>  'required|max:30',
            'workplace' =>  'required|max:30',
            'night_work' =>  'required|max:20',
            'permanence' =>  'required|max:30',
            'address' => 'required|max:100',
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
                \unlink(config('app.image_path')('jobs').'/'.$img_path); 
            }
            foreach($imgs as $file_image ) {
                $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
                $file_image->move(config('app.image_path')('jobs'), $imageName); // move the new img 
                array_push($validate['img'],$imageName); // store image name to db
               // dd($imageName);
            }
            $validate['img'] = implode(',',$validate['img']);
    
        } else {
            $validate['img'] = implode(',',$uploaded_imgs);
        }
        
        $job->update($validate );
       return  redirect()->route('admin.jobs.index',['data' => "jobs $request->advertiser_name updated successfully"]);
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
    public function changeState(Request $request,Job $job)
    {
        $action = $request->query("action");
        $job->update(['state' =>$action] );
    
        return  redirect()->route('admin.jobs.index');
        
    }
}
