<?php
	include('connection.php');
	echo "<script> var last = 0; </script>";
	$sql = "SELECT posx, posy FROM stars";
	$lastStar = "SELECT id from stars ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($dbcon, $sql);
	$resultLastStar = mysqli_query($dbcon, $lastStar);
	while($star = mysqli_fetch_array($result)) {
		echo "<div class='star' style='left: " . $star['posx'] . "px; top: " . $star['posy'] . "px;'></div>";
	}
	while($last = mysqli_fetch_array($resultLastStar)) {
		echo "<script> var last = " . $last['id'] . "; </script>";
	}
?>