<?php

namespace App\Http\Controllers\Guru;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    function create(Request $request){
        //Validate inputs
        $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:gurus,email',
        'hospital'=>'required',
        'password'=>'required|min:5|max:30',
        'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $guru = new Guru();
        $guru->name = $request->name;
        $guru->email = $request->email;
        $guru->hospital = $request->hospital;
        $guru->password = Hash::make($request->password);
        $save = $guru->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully as guru');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
    }

    function check(Request $request){
        //Validate Inputs
        $request->validate([
            'email'=>'required|email|exists:gurus,email',
            'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'This email is not exists in gurus table'
        ]);

        $creds = $request->only('email','password');

        if( Auth::guard('guru')->attempt($creds) ){
            return redirect()->route('guru.home');
        }else{
            return redirect()->route('guru.login')->with('fail','Incorrect Credentials');
        }
    }

    function logout(){
        Auth::guard('guru')->logout();
        return redirect('guru/login');
    }
}
