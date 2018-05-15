<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GorideModel;
use App\GocarModel;

class OnbController extends Controller
{
    public function index()
    {
        $data_goride = GorideModel::all();
        $data_gocar= GocarModel::all();
        return view('content.onb.onb_dashboard', compact('data_goride', 'data_gocar'));
    }
}
