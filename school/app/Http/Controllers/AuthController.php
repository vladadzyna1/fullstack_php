<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }


    public function showRegisterForm(){
        return view('auth.register');
    }


    public function register(){
        $data = request()->validate([
            'name'=>'required|string',
            'email'=>"required|email|string|unique:users",
            'password'=>'required|confirmed',
        ]);

        $user = User::create([
            'name'=>$data['name'],
            'email'=>$data[ 'email'],
            'password'=>bcrypt($data['password']),
        ]);

        if($user){
            auth("web")->login($user);
        }

        return redirect('/');
    }


    public function logout(){
        auth("web")->logout();
        return redirect('/');
    }


    public function login(){
        $data = request()->validate([
            'email'=>"required|email|string",
            'password'=>'required|',
        ]);

        if (auth("web")->attempt($data)){
            return redirect('/');
        }


        return redirect(route('login'));
    }

}
