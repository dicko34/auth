<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\General;
use Illuminate\Http\Request;

class generalController extends Controller
{
    public function index()
    {
        $generals = General::all();
        return view('vendor.general.index',compact('generals'));
    }

    public function search(Request $request)
    {
        $generals = General::all();
         $generals_show = General::where(
            [
            ['advertiser_city',$request->advertiser_city == 'الكل'? '!=': '='  ,$request->advertiser_city == 'الكل' ? null : $request->advertiser_city ],
            ['category',$request->category == 'الكل'? '!=': '='  ,$request->category == 'الكل' ? null : $request->category ],
            ['address',$request->address == 'الكل' || $request->address == ''? '!=': '='  ,$request->address == 'الكل' ? null : $request->address ],
           ]
        )->get();
        return view('vendor.general.index',compact('generals_show','generals'));
    }

    public function product()
    {
        $generals = General::all();
       return view('vendor.general.details',compact('generals'));
    }

    public function add()
    {
        $generals = General::all();
        return view('vendor.general.add',compact('generals'));
    }

}
