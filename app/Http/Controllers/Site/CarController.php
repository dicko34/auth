<?php

namespace App\Http\Controllers\Site;
use App\Models\Cars;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('vendor.cars.index',compact('cars'));
    }

    public function search()
    {
        return view('vendor.cars.search');
    }

    public function product()
    {
        $cars = Cars::all();
       return view('vendor.cars.details',compact('cars'));
    }

    public function add()
    {
        $cars = Cars::all();
        return view('vendor.cars.add',compact('cars'));
    }

    public function choseAdd()
    {
        return view('vendor.choseAdd');
    }
}
