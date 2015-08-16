<?php
	$t = $_GET['task'];
	//$i = intval($_GET['i']);

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

	$sql = "INSERT INTO priority_task (task)
		VALUES ('".$t."')";
	echo $sql;
	
	if ($conn->query($sql) === TRUE) {
    		echo "Record updated successfully";
	} else {
    		echo "Error updating record: " . $conn->error;
	}

 	$conn->close();

?>
