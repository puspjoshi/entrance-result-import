<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function login()
    {
        $arttributes =  request()->validate([
            'email'=> 'required|exists:users,email',
            'password'=>'required'
        ]);
        //athunticate
        if(auth()->attempt($arttributes)){
            session()->regenerate();
            return redirect('/admin/dashboard')->with('success','You are logged in into the system');
        }

        return back()
            ->withInput()
            ->with('success','Provided credientials could not be varified.');
    }
    public function destroy(){
        auth()->logout();
        return redirect('/')->with('success','Good bye!');
    }
}
