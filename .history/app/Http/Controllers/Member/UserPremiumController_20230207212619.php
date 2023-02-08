<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserPremium;

class UserPremiumController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $userPremium = UserPremium::with('package')
            ->where('user_id', $userId);

        if (!$userPremium) {
            return redirect()->route('pricing');
        }

        return view('member.subscription', ['user_premium' => $userPremium]);
    }
}
