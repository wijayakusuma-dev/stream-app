<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function show($id)
    {
        $movie = Movie::find($id);

        return view('member.movie-detail', ['movie' => $movie]);
    }
}
