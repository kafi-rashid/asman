<?php	
	$connection = mysqli_connect('localhost', 'root', '');
	$db = mysqli_select_db($connection, 'starrynight');
	$dbcon = mysqli_connect('localhost', 'root', '', 'starrynight');
?>