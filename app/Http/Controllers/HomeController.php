<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $cars = collect(DB::select("select * from cars where state = 'allowed' LIMIT 6"));
        $generals =  collect(DB::select("select * from generals where state = 'allowed' LIMIT 6"));
        $homes =  collect(DB::select("select * from homes where state = 'allowed' LIMIT 6"));
        $jobs =  collect(DB::select("select * from jobs where state = 'allowed' LIMIT 6"));
        $lands =  collect(DB::select("select * from lands where state = 'allowed' LIMIT 6"));
        $mobiles =  collect(DB::select("select * from mobiles where state = 'allowed' LIMIT 6"));
        $shops =  collect(DB::select("select * from shops where state = 'allowed' LIMIT 6"));
        return view('vendor.home', \compact('cars', 'generals', 'homes', 'jobs', 'lands', 'mobiles', 'shops'));
    }
}
