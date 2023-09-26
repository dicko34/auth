<?php

namespace App\Http\Controllers\Site;

use App\Models\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use Traits\SimilarTrait;
    public function index(Request $request)
    {
        $homes = Home::paginate(6);

        return view('vendor.homes.index', compact('homes'));
    }

    public function search(Request $request)
    {
        
        $homes = Home::paginate(6);

        $homes_show = Home::where(
            [
                ['city', $request->city == null ? '!=' : 'like', $request->city == null ? null : "%$request->city"],
                ['home_type', $request->home_type == null ? '!=' : 'like', $request->home_type == null ? null :  "%$request->home_type%"],
                ['rooms_number', $request->rooms_number == null ? '!=' : 'like', $request->rooms_number == null ? null : "%$request->rooms_number%"],
                ['status', $request->status == null ? '!=' : 'like', $request->status == null ? null : "%$request->status%"],
                ['show', $request->show == null ? '!=' : 'like', $request->show == null ? null : "%$request->show%"],
            ]
        )->paginate(6);
        if (count($homes_show) < 1) {
            $homes_show =  Home::paginate(6);
        }
        return view('vendor.homes.search', compact('homes_show', 'homes'));
    }

    public function product(Request $request)
    {
        $homes = Home::all();
        $home = Home::find($request->home);
        $similar = $this->similar($homes, $home, ['show' => 30, 'price' => 70]);
        return view('vendor.homes.details', compact('homes', 'home', 'similar'));
    }

    public function add()
    {
        $homes = Home::all();
        return view('vendor.homes.add', compact('homes'));
    }
}
