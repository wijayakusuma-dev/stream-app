<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('member.auth');
    }

    public function auth()
    {

    }

    public function logout()
    {

    }

}
