<!DOCTYPE html>  
<html lang="en">  
<head>  
	<meta charset="utf-8">  
	<title>Jquery Snap Shots</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>
<body>
	<div id="mainWrapper">
		<div id="camera"></div><!-- end camera -->
		
		<div id="uploads"></div><!-- end uploads -->
	</div><!--end mainWrapper-->

	<a href="javascript:void(webcam.snap())"> Take snapshot</a>
	<a href="javascript:void(webcam.configure('camera'))">Configure</a>


	<script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="webcam/webcam.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>