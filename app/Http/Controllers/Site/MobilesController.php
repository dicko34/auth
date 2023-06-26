<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobilesController extends Controller
{
    public function index()
    {
        return view('vendor.mobiles.index');
    }

    public function search()
    {
        return view('vendor.mobiles.search');
    }

    public function product()
    {
        return view('vendor.mobiles.details');
    }

    public function add()
    {
        return view('vendor.mobiles.add');
    }
}
