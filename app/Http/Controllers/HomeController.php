<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = DB::table('cars')->take(6)->get();
        $generals = DB::table('generals')->take(6)->get();
        $homes = DB::table('homes')->take(6)->get();
        $jobs = DB::table('jobs')->take(6)->get();
        $lands = DB::table('lands')->take(6)->get();
        $mobiles = DB::table('mobiles')->take(6)->get();
        $shops = DB::table('shops')->take(6)->get();
        //return dd($cars);
       return view('vendor.home',\compact('cars','generals','homes','jobs','lands','mobiles','shops'));
    }
}
