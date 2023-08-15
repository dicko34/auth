<?php

namespace App\Http\Controllers\Site;

use App\Models\Cars;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    use Traits\SimilarTrait;
    public function index()
    {
        $cars = Cars::paginate(2);
        return view('vendor.cars.index',compact('cars'));
    }

    public function search(Request $request)
    {
        $cars = Cars::all()->paginate(2);
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

    public function product(Request $request)
    {
       

        $cars = Cars::all();
        //$semes = \similar_text()
        $car = Cars::find($request->car);
        $similar = $this->similar($cars, $car, ['model_year' => 30,'price'=>70]);
       return view('vendor.cars.details',compact('cars','car','similar'));
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
