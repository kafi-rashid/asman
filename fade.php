<?php
	include('core/connection.php');
	$sql = "TRUNCATE stars";
	$result = mysqli_query($dbcon, $sql);
	if ($result) {
		echo "Done";
	}
?>