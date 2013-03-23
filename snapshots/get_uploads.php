<?php
	$folder = 'uploads';
	$handle = opendir($folder);
	while(($file = readdir($handle)) !== false)
	{
		if($file != '.' && $file != '..')
		{
			echo '<img src="'.$folder.'/'.$file.'" width="150" height="150"/>';
		}
	}
?>