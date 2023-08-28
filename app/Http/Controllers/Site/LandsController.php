<?php

namespace App\Http\Controllers\Site;

use App\Models\Land;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandsController extends Controller
{
    public function index()
    {
        $lands =Land::all();
        return view('vendor.lands.index',compact('lands'));
    }

    public function search()
    {
        return view('vendor.lands.search');
    }

    public function product()
    {
        return view('vendor.lands.details');
    }

    public function add()
    {
        return view('vendor.lands.add');
    }

}
