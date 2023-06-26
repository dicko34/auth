<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        return view('vendor.jobs.index');
    }

    public function search()
    {
        return view('vendor.jobs.search');
    }

    public function product()
    {
        return view('vendor.jobs.details');
    }

    public function add()
    {
        return view('vendor.jobs.add');
    }
}
