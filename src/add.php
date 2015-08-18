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
    <div class="container-fluid">
      <div class="page-header">  
        <p><h1>First Things First!</h1></p>
      </div>
    </div>
    
    <div class="container-fluid text-right">
       <a href="index.php" class="btn btn-link" role="button">Show my tasks!!</a >
    </div>

	<div id="addtaskdiv" class="container">
		<form class="form" role="form">
		<div class="form-group">
			<input type="text" class="form-control" name="task" id="task" value="Enter Task Details.." onfocus="if(this.value == 'Enter Task Details..') {this.value=''}">
			<br>
			<button class="btn btn-success" name="addtask" id="addtask">ADD</button>
		</div>
		</form>
	</div>
   

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
