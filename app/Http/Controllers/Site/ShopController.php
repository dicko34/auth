<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('vendor.shopes.index');
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
