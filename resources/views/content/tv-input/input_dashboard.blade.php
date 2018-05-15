@extends('dashboard.dashboard_tv_input')
@section('content')
<div class="navigation" id="nav">
                <div class="item user">
                    <img src="{{url('images/bg_user.png')}}" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Go-Ride</h2>
                    <ul>
                        <li><a href="{{url('/input-antrian/foto/goride')}}">Foto</a></li>
                    </ul>
                </div>
                <div class="item home">
                    <img src="{{url('images/bg_home.png')}}" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Go-Car</h2>
                    <ul>
                            <li><a href="{{url('/input-antrian/foto/gocar')}}">Foto</a></li>
                    </ul>
                </div>
                <div class="item shop">
                    <img src="{{url('images/bg_shop.png')}}" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>DSU</h2>
                    <ul>
                        {{-- <li><a href="#">Catalogue</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Offers</a></li> --}}
                    </ul>
                </div>
                <div class="item camera">
                    <img src="{{url('images/bg_camera.png')}}" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>DSU-Express</h2>
                    <ul>
                        {{-- <li><a href="#">Gallery</a></li>
                        <li><a href="#">Prints</a></li>
                        <li><a href="#">Submit</a></li> --}}
                    </ul>
                </div>
                <div class="item fav">
                    <img src="{{url('images/bg_fav.png')}}" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Love</h2>
                    <ul>
                        {{-- <li><a href="#">Social</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Comments</a></li> --}}
                    </ul>
                </div>
            </div>
@stop