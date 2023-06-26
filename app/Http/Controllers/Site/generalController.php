<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class generalController extends Controller
{
    public function index()
    {
        return view('vendor.general.index');
    }

    public function search()
    {
        return view('vendor.general.search');
    }

    public function product()
    {
        return view('vendor.general.details');
    }

    public function add()
    {
        return view('vendor.general.add');
    }
}
