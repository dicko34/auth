<?php

namespace App\Http\Controllers\Users\Vendor;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:vendor');
    }

    public function index()
    {
        $categories = Category::get();
        return view('vendor', compact('categories'));
    }

    public function gallery($id)
    {
        $cat = Category::find($id);
        $products = Product::where('category_id', $id)->get();
        return view('categoryImg', compact('cat', 'products'));
    }
}
