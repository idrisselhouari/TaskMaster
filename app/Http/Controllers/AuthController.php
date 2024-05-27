<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function registerPage(){
        return view('register');
    }

    public function loginPage(){
        return view('login');
    }

    public function registerPost(Request $request){
        $user = new User();
        $user->name = $request->firstname ." ". $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();


        return back()->with('success', 'Register succesfully');
    }

    public function loginPost(Request $request){
        $credetials=[
        'email' => $request->email,
        'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/tasks')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password salah');
    }

}
