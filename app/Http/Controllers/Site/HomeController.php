<?php

namespace App\Http\Controllers\Site;

use App\Models\Home;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('vendor.homes.index',compact('homes'));
    }

    public function search()
    {
        return view('vendor.homes.search');
    }

    public function product()
    {
        return view('vendor.homes.details');
    }

    public function add()
    {
        return view('vendor.homes.add');
    }

}
