$(function(){
	webcam.set_api_url('upload.php');
	webcam.set_swf_url('webcam/webcam.swf');
	webcam.set_quality(90);
	webcam.set_shutter_sound(true,'webcam/shutter.mp3');
	$('#camera').html(webcam.get_html(320,240));
	
	webcam.set_stealth(true);
	
	setInterval(function(){
		$('#uploads').load('get_uploads.php');
	}, 1000);
});