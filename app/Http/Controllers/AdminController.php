<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = User::all();
        return view('content.admin.admin_dashboard', compact('data'));
    }


    public function create()
    {
        return view('content.admin.admin_create');
    }


    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->role_id = $request->rules;
        $data->save();
        return redirect()->route('admin.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data = User::where('id', $id)->get();

        return view('content.admin.admin_edit', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = User::where('id', $id)->first();
        $data->name = $request->nama;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->role_id = $request->rules;
        $data->save();
        return redirect()->route('admin.index');
    }


    public function destroy($id)
    {
        $data = User::where('id', $id)->first();
        $data->delete();
        return redirect()->route('admin.index');
    }
}
