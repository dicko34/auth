<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandsController extends Controller
{
    public function index()
    {
        return view('vendor.lands.index');
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
