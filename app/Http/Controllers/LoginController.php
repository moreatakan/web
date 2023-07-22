<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
            return view('backend/login/login',[
                "title" => "login Admin"
            ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $infologin=[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        
        return back()->with('loginError','Login Failed!');

    }

    public function logout(Request $request){
        
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
    }
}
