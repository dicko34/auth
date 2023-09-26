<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\General;
use App\Models\Home;
use App\Models\Job;
use App\Models\Land;
use App\Models\Mobile;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return view
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

     /**
     * Get search result.
     *
     * @return Respone::json()
     */
    public function search(Request $request)
    {
        if($request->search != null) {
            $car = Cars::whereLike(['model','company','drive_type','city','address'],$request->search)->get();
            $general = General::whereLike(['category','city','address'],$request->search)->get();
            $home = Home::whereLike(['show','home_type','extras','city','address'],$request->search)->get();
            $job= Job::whereLike(['specialization','workplace','city','address'],$request->search)->get();
            $land = Land::whereLike(['brief','area','located_on','city','address'],$request->search)->get();
            $mobile = Mobile::whereLike(['device_status','model','reset_model','city','address'],$request->search)->get();
            $shop = Shop::whereLike(['offer','displayed','brief','city','address'],$request->search)->get();
            $results = json_encode(array_merge(json_decode($car, true),json_decode($general, true),json_decode($home, true),json_decode($job, true),json_decode($land, true),json_decode($mobile, true),json_decode($shop, true)));


            return($results);
        }
        // $home = Home::where(
        //     [
        //         ['home_type', '=', json_encode( $request->search)],
        //         ['show', '=', json_encode( $request->search)],
        //     ]
        // )->get();

        // $job = Job::where(
        //     [
        //         ['city', json_encode($request->city) == 'الكل' ? '!=' : '=', json_encode($request->city) == 'الكل' ? null :json_encode( $request->city)],
        //         ['address', json_encode($request->address) == 'الكل' ? '!=' : '=', json_encode($request->address) == 'الكل' ? null : json_encode($request->address)],
        //     ]
        // )->get();

        // return ($request);
    }
}
