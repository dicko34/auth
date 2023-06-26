<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('vendor.homes.index');
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
