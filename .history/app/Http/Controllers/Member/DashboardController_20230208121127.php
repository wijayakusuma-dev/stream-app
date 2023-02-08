<?php

namespace App\Http\Controllers\Member;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('featured', 'DESC')
            ->orderBy('created_at', 'DESC')
            ->get();

        // dd($movies);

        return view('member.dashboard', ['movies' => $movies]);
    }
}
