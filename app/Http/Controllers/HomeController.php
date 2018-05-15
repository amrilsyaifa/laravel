<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->role_id == 1) {
            return redirect('/admin');
        } elseif ($user->role_id == 2) {
            return redirect('/dsu/dashboard');
        } elseif ($user->role_id == 3) {
            return redirect('/onb/dashboard');
        } elseif ($user->role_id == 4) {
            return redirect('/dsu-tv/dashboard');
        } elseif ($user->role_id == 5) {
            return redirect('/onb-tv/dashboard');
        } elseif ($user->role_id == 6) {
            return redirect('/input-antrian/dashboard');
        }
        return view('content.guest.guest_dashboard', compact('user'));
    }
}
