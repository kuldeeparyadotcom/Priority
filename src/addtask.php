<?php
	$t = $_POST['task'];
	//$t = $_GET['task'];

	//Providing credentials like this is not a good practice at all
	//Using docker defined Environment Variables
        $servername=getenv('MYSQL_PORT_3306_TCP_ADDR');
        $username="root";
	$password=getenv('MYSQL_ENV_MYSQL_ROOT_PASSWORD');
	$dbname="priority";

	/*
	//Providing credentials like this is not a good practice at all
	$servername="mysql";
        $username="root";
        $password="password";
        $dbname="priority";
	*/
	
        //Create Connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //Check Connection
        if ($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);
        }

	//For better performance, let's use prepared statements
	$stmt = $conn->prepare("INSERT INTO priority_task (task) VALUES (?)");

	//bind parameters
	$stmt->bind_param("s",$t);
	
	//Execute execute
	$stmt->execute();
	
	//Close the connection
 	$conn->close();

?>
