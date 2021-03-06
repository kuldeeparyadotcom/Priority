<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Priority</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="priority_jquery_functions.js"></script>
    <script src="priority_jquery_ajax.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="page-header">  
        <p><h1>Priority - First Things First!</h1></p>
      </div>
    </div>
    
    <div class="container-fluid text-right">
      <a href="add.php" class="btn btn-link" role="button">Add Tasks!</a >
    </div>

<div id="tasklist">
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

        $sql = "SELECT id, task, priority, completed from priority_task where completed=0";
        $result=$conn->query($sql);

        if ($result->num_rows > 0) {
                //Output data of each row
                while ($row = $result->fetch_assoc()) {

		if ($row["priority"] == 1) {
		$nextpriority=$row["priority"]+1;
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-danger" onclick="updatepriority('.$nextpriority.','.$row["id"].')"> '.$row["task"].' <input type="checkbox" id="checkbox" onclick="updatecompleted(1,'.$row["id"].')" class="text-left" value="" /> </button>
    		</div>' ;
		}

		if ($row["priority"] == 2) {
		$nextpriority=$row["priority"]+1;
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-warning" onclick="updatepriority('.$nextpriority.','.$row["id"].')"> '.$row["task"].' <input type="checkbox" id="checkbox" onclick="updatecompleted(1,'.$row["id"].')" class="text-left" value="" /> </button>
    		</div>' ;
		}

		if ($row["priority"] == 3) {
		$nextpriority=$row["priority"]+1;
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-primary" onclick="updatepriority('.$nextpriority.','.$row["id"].')"> '.$row["task"].' <input type="checkbox" id="checkbox" onclick="updatecompleted(1,'.$row["id"].')" class="text-left" value="" /> </button>
    		</div>' ;
		}

		if ($row["priority"] == 4) {
		$nextpriority=$row["priority"]+1;
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-success" onclick="updatepriority('.$nextpriority.','.$row["id"].')"> '.$row["task"].' <input type="checkbox" id="checkbox" onclick="updatecompleted(1,'.$row["id"].')" class="text-left" value="" /> </button>
    		</div>' ;
		}

		if ($row["priority"] == 5) {
		$nextpriority=1;
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-default" onclick="updatepriority('.$nextpriority.','.$row["id"].')"> '.$row["task"].' <input type="checkbox" id="checkbox" onclick="updatecompleted(1,'.$row["id"].')" class="text-left" value="" /> </button>
    		</div>' ;
		}

                }
        }

        //Close Connection
        $conn->close();
?>
</div>
    <!-- <div class="container">
      <button type="button" id="task1" name="task1" class="btn btn-block btn-default">Do Something. <input type="checkbox" class="text-left" value="" /> </button>
    </div> -->


    <br> 
    <br> 
    <br> 
    <br> 
    <div class="container-fluid">
      <blockquote class="blockquote-reverse">
        <p class="bg-success">
        "You've got to find what you love."
        </p>
        <footer> 
          - Steve Jobs
        </footer>
      </blockquote>
    </div>
  </body>

</html>
