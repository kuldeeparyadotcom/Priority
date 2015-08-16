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
  </head>

  <body>
    <div class="container-fluid">
      <div class="page-header">  
        <p><h1>First Things First!</h1></p>
      </div>
    </div>
    
    <div class="container-fluid text-right">
      <button type="button" class="btn-link"><label for="manage_survey">Add Tasks!</label></button>
    </div>


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

		if ($row["priority"] == 1) {
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-danger"> '.$row["task"].' <input type="checkbox" id="checkbox" class="text-left" value="" /> </button>
    		</div>' ;
		}

		if ($row["priority"] == 2) {
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-warning"> '.$row["task"].' <input type="checkbox" id="checkbox" class="text-left" value="" /> </button>
    		</div>' ;
		}

		if ($row["priority"] == 3) {
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-primary"> '.$row["task"].' <input type="checkbox" id="checkbox" class="text-left" value="" /> </button>
    		</div>' ;
		}

		if ($row["priority"] == 4) {
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-success"> '.$row["task"].' <input type="checkbox" id="checkbox" class="text-left" value="" /> </button>
    		</div>' ;
		}

		if ($row["priority"] == 5) {
    		echo '<div class="container">
      			<button type="button" id='.$row["id"].' name='.$row["id"].' class="btn btn-block btn-default"> '.$row["task"].' <input type="checkbox" id="checkbox" class="text-left" value="" /> </button>
    		</div>' ;
		}

                }
        }

        //Close Connection
        $conn->close();
?>

    <!-- <div class="container">
      <button type="button" id="task1" name="task1" class="btn btn-block btn-default">Do Something. <input type="checkbox" class="text-left" value="" /> </button>
    </div> -->
 
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
