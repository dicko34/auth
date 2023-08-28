<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Mobile;
use Illuminate\Http\Request;

class MobilesController extends Controller
{
    use Traits\SimilarTrait;
    public function index()
    {
        $mobiles =Mobile::all();
        return view('vendor.mobiles.index',compact('mobiles'));
    }

    public function search(Request $request)
    {
        $mobiles = Mobile::all();
         $mobiles_show = Mobile::where(
            [
                ['company',$request->company == 'الكل'? '!=': '='  ,$request->company == 'الكل' ? null : $request->company ],
                ['device_status',$request->device_status == 'الكل'? '!=': '='  ,$request->device_status == 'الكل' ? null : $request->device_status ],
                ['advertiser_city',$request->advertiser_city == 'الكل'? '!=': '='  ,$request->advertiser_city == 'الكل' ? null : $request->advertiser_city ],
           ]
        )->whereBetween('price',[(int) $request->price_min,(int) $request->price_max])->get();
        return  view('vendor.mobiles.search',compact('mobiles','mobile','mobile'));
    }

    public function product(Request $request)
    {
        $mobiles = Mobile::all();
        $mobile = Mobile::find($request->mobile);
        $similar = $this->similar($mobiles, $mobile, ['model' => 30,'reset_model'=>70]);
        return view('vendor.mobiles.details',compact('mobiles','mobile','similar'));
    }

    public function add()
    {
        $mobiles =Mobile::all();
        return view('vendor.mobiles.add',compact('mobiles'));
    }
}
