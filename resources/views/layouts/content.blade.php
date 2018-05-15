<!-- top tiles -->
<div class="right_col" role="main">
  <div class="row tile_count">
    @yield('banner')
  </div>
  <!-- /top tiles -->
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="dashboard_graph">
        <!-- Isi konten  -->
        @yield('content')
        <!-- /Isi kontent -->
      </div>
    </div>
  </div>
</div>