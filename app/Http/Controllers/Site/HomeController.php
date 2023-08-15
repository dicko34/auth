<?php

namespace App\Http\Controllers\Site;

use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::paginate(2);
        return view('vendor.homes.index',compact('homes'));
    }

    public function search(Request $request)
    {
        $homes = Home::all()->take(6);
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

    public function product()
    {
        $homes = Home::all();
        return view('vendor.homes.details',\compact('homes'));
    }

    public function add()
    {
        $homes = Home::all();
        return view('vendor.homes.add',compact('homes'));
    }

}
