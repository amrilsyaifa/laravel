@extends('layouts.app')
@section('menu')
@section('judulbody')
nav-md
@endsection
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
          <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Sisaper</span></a>
        </div>
        <div class="clearfix"></div>
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <!-- menu profile quick info -->
        @include ('layouts.menu-profil')
        <!-- /menu profile quick info -->
        <br />
        <!-- sidebar menu -->
        @include ('layouts.sidebar')
        <!-- /sidebar menu -->
      </div>
    </div>
    <!-- top navigation -->
    @include ('layouts.top-nav')
    <!-- /top navigation -->
    <!-- page content -->
    @include ('layouts.content')
    <!-- /page content -->
    <!-- footer content -->
    @include ('layouts.footer')
    <!-- /footer content -->
  </div>
</div>
@endsection