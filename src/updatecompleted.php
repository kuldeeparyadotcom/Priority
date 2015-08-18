<?php
	$c = intval($_POST['c']);
	$i = intval($_POST['i']);
	echo "completion: ".$c;
	echo "id ".$i;


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

        //$sql = "SELECT id, task, priority, completed from priority_task";
	$sql = "UPDATE priority_task SET completed=".$c." WHERE id=".$i; 
	
	if ($conn->query($sql) === TRUE) {
    		echo "Record updated successfully";
	} else {
    		echo "Error updating record: " . $conn->error;
	}

 	$conn->close();

?>
