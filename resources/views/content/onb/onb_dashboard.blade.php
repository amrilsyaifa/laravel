@extends('dashboard.dashboard_utama')
@section('content')
<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <a href="tes">
                  <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                  <div class="count">{{$data_goride->count()}}</div>
                  <h3>Go-Ride</h3>
                  <p>PT. Gojek Indonesia</p>
                </a>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-comments-o"></i></div>
                  <div class="count">{{$data_gocar->count()}}</div>
                  <h3>Go-Car</h3>
                  <p>PT. Gojek Indonesia</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                  <div class="count">179</div>
                  <h3>Transfer</h3>
                  <p>PT. Gojek Indonesia</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-check-square-o"></i></div>
                  <div class="count">179</div>
                  <h3>Total Pelayanan</h3>
                  <p>PT. Gojek Indonesia</p>
                </div>
              </div>
            </div>
  @stop