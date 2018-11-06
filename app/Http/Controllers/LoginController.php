<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function LoginForm(){
          
        if(Auth::check()){
            return back();
        }
        return view('login');
    }

    public function signout(){
        Auth::logout();
        return redirect('signin');
    }

    public function login(Request $request){                                               
        $pass=$request->input('password');
        $email="snzisad@gmail.com";
        $id=1;

        if (Auth::attempt(['id'=>$id,'email'=>$email,'password' => $pass])){
            return redirect('/dped'); 
        }
        return redirect('/signin')->withErrors("Sorry the password is invalid");
    }
}
