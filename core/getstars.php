<?php
	include('connection.php');
	$last = $_POST['last'];
	$sql = "SELECT posx, posy FROM stars WHERE id >= $last";
	$result = mysqli_query($dbcon, $sql);
	while($star = mysqli_fetch_array($result)) {
		echo "<div class='star' style='left: " . $star['posx'] . "px; top: " . $star['posy'] . "px;'></div>";
	}
	$lastStar = "SELECT id from stars ORDER BY id DESC LIMIT 1";
	$resultLastStar = mysqli_query($dbcon, $lastStar);
	while($last = mysqli_fetch_array($resultLastStar)) {
		echo "<script> last = " . $last['id'] . "; </script>";
	}
?>