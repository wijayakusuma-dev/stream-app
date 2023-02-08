<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('member.auth');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['role'] = 'member';

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return 'success';
            // return redirect()->route('member.dashboard');
        }

        return back()->withErrors([
            'credentials' => 'Your credentials are wrong.'
        ])->withInput();
    }

    public function logout()
    {

    }

}
