<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller{
    public function index(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function storeUser(Request $request){
        /*
        ********************************
        Regras de registro:
        **
        x Nenhum campo pode ser "", todos required
        x Email tem de ser unique
        x Password tem de ser > 6 caracteres
        */

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $data = $request->only('name', 'email', 'password');
        if ($request->password_confirmation == $data['password']){
            $userCreated = User::create($data);
        }

        return redirect(route('login'));
    }
}
