/* $(document).ready(function() {
        $("button").click(function() {
            $(this).addClass('btn-success');
          });
      });

*/

 $(document).ready(function() {
        $("input:checkbox").click(function() {
            $(this).parent().hide();
          });
      });


var MAX = 5; //Assumption: It is assumed that only 5 categorizations are entertained.
var button_class = "btn-default";
var previous_class = "";
$(document).ready(function() {
var priority = 4; //Value should come from database
        $("button").click(function() {
            priority = (priority + 1) % 5;

	    //alert(priority);

	    switch(priority) {
	      case 1:
		button_class = "btn-danger";
		break;
	
	      case 2:
		button_class = "btn-warning";
		break;


	      case 3:
		button_class = "btn-primary";
		break;


	      case 4:
		button_class = "btn-info";
		break;


	      case 0:
		button_class = "btn-success";
		break;
	    }


            $(this).removeClass(previous_class);
            $(this).addClass(button_class);
            previous_class = button_class;
           //Updated Priority value should be written back to database
          });
      });

/* 
$(document).ready(function updatePriority(p,i) {
        alert("Call received!");
        if(window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
        } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        //do something
                }
        }

        xmlhttp.open("GET", "updatePriority.php?p="+p+"&i="+i,true");
        xmlhttp.send();

});

*/
