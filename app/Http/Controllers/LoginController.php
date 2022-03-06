<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Hash;
use Illuminate\support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function register(){
        return view('login.register');
    }
    public function store(Request $request){
        $validateData=$request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|min:3|max:255'
        ]);
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
 
        return redirect()->to('/login')->with('status', 'Registrasi Berhasil Silahkan Login!');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password'=> 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        return back()->with('Login Error','Login Gagal!');
    }
}
