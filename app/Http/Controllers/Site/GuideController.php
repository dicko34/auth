<?php

namespace App\Http\Controllers\Site;

use App\Models\Guide;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    use Traits\SimilarTrait;
    public function index(Request $request)
    {
        $guides = Guide::paginate(6);
        return view('vendor.guides.index',compact('guides'));
    }

    public function search(Request $request)
    {
        $guides = Guide::paginate(6);
       
        $guides_show = Guide::where(
            [['city',$request->city == 'الكل'? '!=': '='  ,$request->city == 'الكل' ? null : $request->city ],
            ['title',$request->title == 'الكل'? '!=': '='  ,$request->title == 'الكل' ? null : $request->title ],
            ]
        )->paginate(6);
        if (count($guides_show) < 1) {
            $guides_show =  Guide::paginate(6);
        }
        return view('vendor.guides.search',compact('guides_show','guides'));
    }

    public function product(Request $request)
    {
        $guides = Guide::all();
        $guide = Guide::find($request->guide);
        $similar = $this->similar($guides, $guide, ['show' => 30,'price'=>70]);
        return view('vendor.guides.details',compact('guides','guide','similar'));
    }

    public function add()
    {
        $guides = Guide::all();
        return view('vendor.guides.add',compact('guides'));
    }

}
