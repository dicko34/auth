<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'fname' =>  'required|max:50',
            'lname' =>  'required|max:50',
            'email' =>  'required|email',
            'city' =>  'required|max:50',
            'address' =>  'required|max:200',
            'phone' =>  'required|max:30|min:10',
            'password' => 'min:8',
            'img'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = $request->file('img')->getClientOriginalName();
        $validate['password'] =  Hash::make($request->password);
        $validate['img']->move(public_path('assets/site/images/users'), $imageName); // move the new img 
        $validate['img']=$imageName; // store image name to db
        $validate['state']='pinned'; // store image name to db
        user::create($validate );
        return  redirect()->route('admin.users.index',['data' => "user $request->name create successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.users.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
         $validate = $request->validate([
             'fname' =>  'required|max:50',
             'lname' =>  'required|max:50',
             'email' =>  'required|email',
             'city' =>  'required|max:50',
             'address' =>  'required|max:200',
             'phone' =>  'required|max:30|min:10',
             'password' => 'min:8',
             'img'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
         ]);
         $imageName = $request->file('img')->getClientOriginalName();
         $image_path = public_path('assets/site/images/users').'/'.$user->img;
         \unlink($image_path); // remove the old img from db
         $validate["password"] =  Hash::make($request->password);
         $validate['img']->move(public_path('assets/site/images/users'), $imageName); // move the new img 
         $validate['img']=$imageName; // store image name to db
        $user->update($validate );
       // return $request->only('email', 'password');
        return  redirect()->route('admin.users.index',['data' => "user $request->name update successfully"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return $user->delete();
    }
    public function changeState(Request $request,User $user)
    {
        $action = $request->query("action");
            
            $user->update(['state' =>"$action"] );
        
        
        return  redirect()->route('admin.users.index');
        
    }
   
}
