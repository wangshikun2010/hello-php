<?php
	// if (!isset($_GET['style'])) {
	// 	header('Location: 11-7.php');
	// } else {
		setcookie('style',$_GET['style'],time()+60);
		header('Location: 11-7.php?style='.$_GET['style']);
	//}
?>
