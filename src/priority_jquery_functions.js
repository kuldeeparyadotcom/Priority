/* $(document).ready(function() {
        $("button").click(function() {
            $(this).addClass('btn-success');
          });
      });

*/

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
