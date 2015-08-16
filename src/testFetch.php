<?php
	$servername="mysql";
	$username="root";
	$password="password";
	$dbname="priority";

	//Create Connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check Connection
	if ($conn->connect_error) {
		die("Connection failed: ". $conn->connect_error);
	}

	$sql = "SELECT id, task, priority, completed from priority_task";
	$result=$conn->query($sql);

	if ($result->num_rows > 0) {
		//Output data of each row
		while ($row = $result->fetch_assoc()) {
			echo "id ".$row["id"]. " task ". $row["task"]." priority ".$row["completed"]. "<br>";
		}
	}

	//Close Connection
	$conn->close();
?>

