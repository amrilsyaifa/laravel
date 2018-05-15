<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GorideModel;
use App\GocarModel;
use Image;
use Illuminate\Support\Facades\Input;

class InputantrianController extends Controller
{
    public function index()
    {
        return view('content.tv-input.input_dashboard');
    }

    public function getfotogoride()
    {
        return view('content.tv-input.foto_goride');
    }

    public function getpostgoride()
    {
        $data = Input::all();

        $name = $data['name'];
        $hp = $data['handphone'];

        //get the base-64 from data
        $base64_str = substr($data['webcam'], strpos($data['webcam'], ",")+1);

        //decode base64 string
        $image = base64_decode($base64_str);
        $png_url = "gr-".time().".png";
        $path = public_path('/uploads/goride/' . $png_url);

        Image::make($image)->save($path);

        $goride = new GorideModel;
        $goride->name = $name;
        $goride->handphone = $hp;
        $goride->avatar = $png_url;
        $goride->save();

        return redirect('/input-antrian/dashboard');
    }

    public function getfotogocar()
    {
        return view('content.tv-input.foto_gocar');
    }

    public function getpostgocar()
    {
        $data = Input::all();

        $name = $data['name'];
        $hp = $data['handphone'];

        //get the base-64 from data
        $base64_str = substr($data['webcam'], strpos($data['webcam'], ",")+1);

        //decode base64 string
        $image = base64_decode($base64_str);
        $png_url = "gc-".time().".png";
        $path = public_path('/uploads/gocar/' . $png_url);

        Image::make($image)->save($path);

        $gocar = new GocarModel;
        $gocar->name = $name;
        $gocar->handphone = $hp;
        $gocar->avatar = $png_url;
        $gocar->save();

        return redirect('/input-antrian/dashboard');
    }
}
