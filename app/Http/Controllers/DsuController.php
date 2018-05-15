<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DsuController extends Controller
{
    public function index()
    {
        return view('content.dsu.dsu_dashboard');
    }
}
