<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        return view('admin.appointment.signin');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required']
        ]);

        Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);

        return redirect()->route('admin.index');
    }

    public function logout(){
        Auth::logout();
        Session::flush();

        return redirect()->route('login');
    }
}
