<?php

namespace App\Http\Controllers\Site;
use App\Models\Cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function index()
    {
        $cars = Cars::all();
        return view('vendor.cars.index',compact('cars'));
    }

    public function search(Request $request)
    {
        $cars = Cars::all();
         $cars_show = Cars::where(
            [['company',$request->company == 'الكل'? '!=': '='  ,$request->company == 'الكل' ? null : $request->company ],
            ['model',$request->model == 'الكل'? '!=': '='  ,$request->model == 'الكل' ? null : $request->model ],
            ['city',$request->city == 'الكل'? '!=': '='  ,$request->city == 'الكل' ? null : $request->city ],
            ['fuel_type',$request->fuel_type == 'الكل'? '!=': '='  ,$request->fuel_type == 'الكل' ? null : $request->fuel_type ],
            ['lime_type',$request->lime_type == 'الكل'? '!=': '='  ,$request->lime_type == 'الكل' ? null : $request->lime_type ],
            ['driving_license',$request->driving_license == 'الكل'? '!=': '='  ,$request->driving_license == 'الكل' ? null : $request->driving_license ],]
        )->whereBetween('price',[(int) $request->price_min,(int) $request->price_max])->get();
        return view('vendor.cars.index',compact('cars_show','cars'));
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
