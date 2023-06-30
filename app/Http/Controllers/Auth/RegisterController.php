<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'img'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        return('validator');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
   
     protected function create(array $data)
     {
         // $imageName = time().'.'.$data['img']->extension();
         // $data['img']->move(public_path('assets/site/images/users'), $imageName);
         $imageName = $data['img']->getClientOriginalName();
         $data['img']->move(public_path('assets/site/images/users'), $imageName);
 
         return User::create([
             'fname' => $data['fname'],
             'email' => $data['email'],
             'password' => Hash::make($data['password']),
             'city' => 'null',
             'address' => 'null',
             'lname' => $data['lname'],
             'phone' => $data['phone'],
             'img' => $imageName,
         ]);
     }
    
}
