<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Auth;

class logincontroller extends Controller
{
    public function halamanlogin(){
        return view('form_login.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }    
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect ('/login');
    }

    // public function registrasi(){
    //    return view('from_login.registrasi');
    // }

    public function simpanregistrasi(Request $request){
        // dd($request->all());

        User::create([
            'name' => $request->name,
            'Alamat' => $request->Alamat,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

        return view('form_login.login');

    }
}