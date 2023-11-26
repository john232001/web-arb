<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => $data['password'],
        ]);
    }
    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        //check credentials
        $checklogin = $request->only('username', 'password');
        if (Auth::attempt($checklogin)) {
            return redirect()->route('dashboard')->with('success', 'Login Successfully');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login')->with('error', 'Logout Successfully');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
    }
}
