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

    public function watch($id)
    {
        $userId = auth()->user()->id;

        $userPremium = UserPremium::where('user_id', $userId)->first();

        if ($userPremium) {
            $endOfSubscription = $userPremium->end_of_subscription;
            $date = Carbon::createFromFormat('Y-m-d', $endOfSubscription);
            $isValidSubscription = $date->greaterThan(now());

            if ($isValidSubscription) {
                $movie = Movie::find($id);
                return view('member.movie-watching', ['movie' => $movie]);
            }
        }

        return redirect()->route('pricing');
    }
}
