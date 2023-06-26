<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class VendorRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:vendor');
    }

    public function showRegisterForm()
    {
        echo 'ddddd';

        return view('vendor.register');
    }

    public function register(Request $request)
    {
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:vendors'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // $request['password'] = Hash::make($request->password);
        
        DB::table('vendors')->insert([
            [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'real_password' => $request->password,
                'phone' => $request->phone,
                'state' => 'pending',   
        ]]);

       //return redirect()->route('vendor.dashboard');
        return "ffffffffffff";
    }
}
