@extends('dashboard.dashboard_tv_input')
@section('content')
<style type="text/css">
		body { font-family: Helvetica, sans-serif; }
		h1, h2, h3 { margin-top:0; margin-bottom:0; }
		form { margin-top: 15px; }
		form input { margin-right: 15px; }
		#results { display:inline-block; margin:20px; padding:20px; border:1px solid; background:#ccc; }
</style>
<div style="margin-top:5px; margin-bottom:20px;"></div>
<form id="myform" method="POST" action="{{url('/input-antrian/foto/gocar')}}">
	@csrf
<div id="my_photo_booth">
	<div id="my_camera"></div>

		<div id="pre_take_buttons">
			<!-- This button is shown before the user takes a snapshot -->
			<input type=button value="Take Snapshot" id="snapshot"  onClick="preview_snapshot()">
		</div>
		<div id="post_take_buttons" style="display:none">
			<!-- These buttons are shown after a snapshot is taken -->
			<input type="text" value="Nama Lengkap" name="name">
			<br>
			<input type="text" value="Nomor Handphone" name="handphone">
			<br>
			<input type=button value="&lt; Take Another" onClick="cancel_preview()">
			<input type=button value="Save Photo &gt;" onClick="myform.submit()" style="font-weight:bold;">
			<input type="hidden" name="webcam" id='mypic'>
		</div>
</div>
</form>

<script type="text/javascript" src="{{url('webcam-js/webcam.min.js')}}"></script>
<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">
	Webcam.set({
			// live preview size
			width: 640,
			height: 480,

			// device capture size
			dest_width: 640,
			dest_height: 480,

			// final cropped size
			crop_width: 480,
			crop_height: 480,

			// format and quality
			image_format: 'jpeg',
			jpeg_quality: 90,

			// flip horizontal (mirror mode)
			flip_horiz: true
		});
		Webcam.attach( '#my_camera' );
	// preload shutter audio clip
	var shutter = new Audio();
	shutter.autoplay = false;
	shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';


	//Saat tombol capture diklik, value dari gambar isikan ke hidden input id "mypic"
        document.getElementById('snapshot').addEventListener("click", function() {
            Webcam.snap( function(data_uri) {
                document.getElementById('mypic').value = '<img src="'+data_uri+'"/>';
            });
        });

	function preview_snapshot() {
		// play sound effect
		try { shutter.currentTime = 0; } catch(e) {;} // fails in IE
		shutter.play();

		// freeze camera so user can preview current frame
		Webcam.freeze();

		// swap button sets
		document.getElementById('pre_take_buttons').style.display = 'none';
		document.getElementById('post_take_buttons').style.display = '';
	}

	function cancel_preview() {
		// cancel preview freeze and return to live camera view
		Webcam.unfreeze();

		// swap buttons back to first set
		document.getElementById('pre_take_buttons').style.display = '';
		document.getElementById('post_take_buttons').style.display = 'none';
	}


</script>
@stop