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
    public function register()
    {
        return view('auth.register');
    }
    public function postRegister(Request $request)
    {
        //validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8',
        ]);

        $data = $request->all();
        $createUsers = $this->create($data);
        return redirect()->route('register')->with('success', 'Registered successfully.');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
        ]);
    }
    public function postLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //check credentials
        $checklogin = $request->only('email', 'password');
        if (Auth::attempt($checklogin)) {
            return redirect()->route('dashboard')->with('success', 'Login Successfully');
        }
        else{
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login')->with('logout', 'Logout Successfully');
    }
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }
    }
}
