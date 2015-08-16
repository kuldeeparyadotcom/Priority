<?php
	$p = intval($_GET['p']);
	$i = intval($_GET['i']);

	$con = mysqli_connect('mysql', 'root', 'password', 'priority');
	if (!$con) {
		die('Could not connect! '.mysqli_error($con));
	}

	mysqli_select_db($con,"priority");
	$sql = "UPDATE priority_task SET priority=".$p." WHERE id=".$i;

	mysqli_close($con);
?>
