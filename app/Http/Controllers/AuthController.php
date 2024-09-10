<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class AuthController extends Controller{
    public function index(){

        if(Auth::check()){
            return redirect(route('home'));
        }else{
            return view('login');
        }
    }
    
    public function loginAuth(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($data)){
            return redirect()->route('home');
        }else{
            return back()->withErrors(['email' => 'Incorrect email or password.']);
        }

    }

    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

    public function register(){
        if (Auth::check()){
            return redirect(route('home'));
        }else{
            return view('register');
        }
    }

    public function storeUser(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $data = $request->only('name', 'email', 'password');
        if ($request->password_confirmation == $data['password']){
            // caso não tenha hash, usar: $data['password'] = Hash::make($data['password']);
            User::create($data);
        }

        return redirect(route('login'));
    }
}
