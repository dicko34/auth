<?php

namespace App\Http\Controllers\Site;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{

    use Traits\SimilarTrait;
    public function index()
    {
        $shopes =Shop::paginate(6);
        return view('vendor.shopes.index',compact('shopes'));
    }

    public function search(Request $request)
    {
        
        $shopes_show =Shop::where(
            [
                ['city', $request->city == null ? '!=' : 'like', $request->city == null ? null :  "%$request->city%"],
                ['displayed', $request->displayed == null ? '!=' : 'like', $request->displayed == null ? null :  "%$request->displayed%"],
                ['offer', $request->offer == null ? '!=' : 'like', $request->offer == null ? null :  "%$request->offer%"],
            ]
        )->paginate(6);
        if (count($shopes_show) < 1) {
            $shopes_show = Shop::paginate(6);
        }
        return view('vendor.shopes.search', compact('shopes_show'));
    }

    public function  product(Request $request)
    {
        $shops = Shop::all();
        $shop = Shop::find($request->shop);
        $similar = $this->similar($shops, $shop, ['model' => 30,'reset_model'=>70]);
        return view('vendor.shopes.details',compact('shops','shop','similar'));
    }

    public function add()
    {
        return view('vendor.shopes.add');
    }

}
