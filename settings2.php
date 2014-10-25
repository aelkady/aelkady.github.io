<?php
	session_start();
	$message="";
/*	if(file_exists('settings.txt')) {
		$checkboxesFile = file_get_contents('settings.txt');
		$checkboxesFile = unserialize($checkboxesFile);
		echo $checkboxesFile;
	}
	else {
		echo 'First Time';
	} */
	for($i=0;$i<$_SESSION['length'];$i++) {
		$current_box="checkboxes{$i}";
		$message.=$_SESSION[$current_box];
	}
	echo $message;

	?>