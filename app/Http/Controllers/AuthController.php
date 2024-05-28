<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index()
    {
        if (Session::has('user_name')  & Session::has('user_email') & Session::has('user_id')) {
            return redirect()->route('tasks');
        }
        return view('authentification/welcome');
    }

    public function registerPage()
    {
        if (Session::has('user_name')  & Session::has('user_email') & Session::has('user_id')) {
            return redirect()->route('tasks');
        }
        return view('authentification/register');
    }

    public function loginPage()
    {
        if (Session::has('user_name')  & Session::has('user_email') & Session::has('user_id')) {
            return redirect()->route('tasks');
        }
        return view('authentification/login');
    }

    public function registerPost(Request $request)
    {
        $user = new User();
        $user->name = $request->firstname ." ". $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register succesfully');
    }

    public function loginPost(Request $request)
    {
        $credetials=[
        'email' => $request->email,
        'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/tasks')->with('success', 'Login berhasil');
        }

        return back()->with('error', 'Email or Password salah');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/Login'); // Redirect to the login page or any other page after logout
    }
}
