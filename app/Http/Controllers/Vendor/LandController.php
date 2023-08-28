<?php

namespace App\Http\Controllers\Vendor;
use App\Models\Land;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class LandController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $validate['img'] = [];
        foreach($request->file('img') as $file_image ) {
            $imageName =  Str::of(carbon::now()->millisecond().$request->id)->pipe('md5').$file_image->getClientOriginalName();
            $file_image->move(public_path('assets/site/images/lands'), $imageName); // move the new img 
            array_push($validate['img'],$imageName); // store image name to db
        }
        $validate['img'] = implode(',',$validate['img']);
        $validate['state'] = 'pinned';
        Land::create($validate);
       
        return redirect()->route('vendor.lands.index');
    }

    /**
     * Display the searched resource from storage .
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function search(Request $request)
     {
        $lands = Land::all();
         $lands_show = Land::where(
            [['company',$request->company == 'الكل'? '!=': '='  ,$request->company == 'الكل' ? null : $request->company ],
            ['model',$request->model == 'الكل'? '!=': '='  ,$request->model == 'الكل' ? null : $request->model ],
            ['city',$request->city == 'الكل'? '!=': '='  ,$request->city == 'الكل' ? null : $request->city ],
            ['fuel_type',$request->fuel_type == 'الكل'? '!=': '='  ,$request->fuel_type == 'الكل' ? null : $request->fuel_type ],
            ['lime_type',$request->lime_type == 'الكل'? '!=': '='  ,$request->lime_type == 'الكل' ? null : $request->lime_type ],
            ['driving_license',$request->driving_license == 'الكل'? '!=': '='  ,$request->driving_license == 'الكل' ? null : $request->driving_license ],]
        )->whereBetween('price',[$request->price_min,$request->price_max])->get();
        return view('vendor.lands.index',compact('lands_show','lands'));
     }
}
