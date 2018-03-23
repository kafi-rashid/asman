<?php	
	$connection = mysql_connect('localhost', 'root', '');
	$db = mysql_select_db('starrynight', $connection);
	$dbcon = mysqli_connect('localhost', 'root', '', 'starrynight');
?>