<?php
	$date_of_expiry = time() + 6000000000000000000000000 ;
	if(!empty($_POST['checkboxes0'])) {
		setcookie('length',$_POST['length'], $date_of_expiry);
		for($i=0;$i<$_POST['length'];$i++) {
			$current_box="checkboxes{$i}";
			//echo $_POST['length'];
			//echo $_POST[$current_box];
			//echo '/n';
			setcookie( $current_box, $_POST[$current_box], $date_of_expiry);
			echo $_COOKIE[$current_box];
			//echo $_POST[$current_box], '<br>';
	//		$checkboxes[$i]=$_POST[$current_box];
	//		file_put_contents('settings.txt', $_POST[$current_box]);
		} 
	}
	else {
		for($i=0;$i<$_COOKIE['length'];$i++) {
			$current_box="checkboxes{$i}";
			echo $_COOKIE[$current_box];
			if($i!=$_COOKIE['length']-1) {
				echo ',';
			}
			//echo $_COOKIE[$current_box].toString() + '<br>';
			//echo $_POST[$current_box], '<br>';
	//		$checkboxes[$i]=$_POST[$current_box];
	//		file_put_contents('settings.txt', $_POST[$current_box]);
		}		
	}

	

//	$checkboxes = serialize($checkboxes);
//	file_put_contents('settings.txt', $checkboxes); 

/*	$_SESSION['length']=$_POST['length'];
	for($i=0;$i<$_POST['length'];$i++) {
		echo $current_box;
//		$checkboxes[$i]=$_POST[$current_box];
//		file_put_contents('settings.txt', $_POST[$current_box]);
	}
//	$checkboxes = serialize($checkboxes);
//	file_put_contents('settings.txt', $checkboxes); */

?>