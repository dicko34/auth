<?php

namespace App\Http\Controllers\Site;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index()
    {
        $shopes =Shop::all();
        return view('vendor.shopes.index',compact('shopes'));
    }

    public function search()
    {
        return view('vendor.shopes.search');
    }

    public function product()
    {
        return view('vendor.shopes.details');
    }

    public function add()
    {
        return view('vendor.shopes.add');
    }

}
