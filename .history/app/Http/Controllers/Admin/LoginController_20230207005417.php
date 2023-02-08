<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['role'] = 'admin';

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->route('admin.movie');
        // }

        // return back()->withErrors([
        //     'error' => 'Your credentials are wrong'
        // ])->withInput();

        dd($credentials);
    }


}
