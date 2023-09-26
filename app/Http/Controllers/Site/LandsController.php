<?php

namespace App\Http\Controllers\Site;

use App\Models\Land;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandsController extends Controller
{
    use Traits\SimilarTrait;
    public function index()
    {
        $lands =Land::paginate(6);
        return view('vendor.lands.index',compact('lands'));
    }

    public function search(Request $request)
    {
        $lands_show = Land::where(
            [
                ['city', $request->city == 'null' ? '!=' : 'like', $request->city == 'null' ? null : "%$request->city%"],
            
            ]
        )->paginate(6);
        
        if (count($lands_show) < 1) {
            $lands_show =  Land::paginate(6);
        } 
        return view('vendor.lands.search',compact('lands_show'));
    }

    public function product(Request $request)
    {
        $lands = Land::paginate(6);

        $land = Land::find($request->land);
        $similar = $this->similar($lands, $land, ['price' => 30,'city'=>70]);
        return view('vendor.lands.details',compact('lands','land','similar'));
    }

    public function add()
    {
        return view('vendor.lands.add');
    }

}
