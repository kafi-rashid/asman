<?php	
	include('connection.php');
	$left = $_POST['left'];
	$top = $_POST['top'];
	if ($left != 0 && $top != 0) {
		$sql = "INSERT INTO stars(posx, posy) VALUES('$left', '$top')";
		$result = mysqli_query($dbcon, $sql);
		if($result) echo "done";
	}
?>