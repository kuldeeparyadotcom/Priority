//Ajax call to request addtask.php for inserting new task in mysql
$(document).ready(function(){
    $("#addtask").click(function(){
        var task = $("#task").val();
        $.post("addtask.php",
        {
          task: task,
        },
        function(data,status){
	    //Just refresh the addtask div
            $("#addtaskdiv").load(location.href + " #addtaskdiv");
          	
		/* Enable only for troubleshooting  
		//There is one observation. On few calls of this jQuery, the below alert does not pop up (No idea what's goin)
		alert("Data: " + data + "\nStatus: " + status);
		*/
        });
    });
});



//jquery based implementation of Ajax to update priority

function updatepriority(p,i){
        $.post("updatepriority.php",
        {
          p: p,
	  i: i,
        },
        function(data,status){
	    //To reload only task list
            $("#tasklist").load(location.href + " #tasklist");

	/* Enable only for troubleshooting
            alert("Data: " + data + "\nStatus: " + status);
	*/
        });
}

//jquery based implementation of Ajax to update completion

function updatecompleted(c,i){
        $.post("updatecompleted.php",
        {
          c: c,
          i: i,
        },
        function(data,status){
            //To reload only task list
            $("#tasklist").load(location.href + " #tasklist");

	/* Enable only for troubleshooting
	    alert("Data: " + data + "\nStatus: " + status);
	*/
        });
}

