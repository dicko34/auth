<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return view('vendor.cars.index');
    }

    public function search()
    {
        return view('vendor.cars.search');
    }

    public function product()
    {
        return view('vendor.cars.details');
    }

    public function add()
    {
        return view('vendor.cars.add');
    }

    public function choseAdd()
    {
        return view('vendor.choseAdd');
    }
}
