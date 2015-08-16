function updatepriority(p,i) {
    if (p == "") {
        //document.getElementById("txtHint").innerHTML = "";
	alert("Empty Priority variable p");
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //document.getElementById("msg").innerHTML = xmlhttp.responseText;
                //document.getElementById(i).contentWindow.location.reload();
		window.location.reload();
            }
        }
        xmlhttp.open("GET","updatepriority.php?p="+p+"&i="+i,true);
        xmlhttp.send();
    }
}

//updatecompleted

function updatecompleted(c,i) {
    if (c == "") {
        //document.getElementById("txtHint").innerHTML = "";
        alert("Empty Completion Status");
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                //document.getElementById("msg").innerHTML = xmlhttp.responseText;
                //document.getElementById(i).contentWindow.location.reload();
                window.location.reload();
            }
        }
        xmlhttp.open("GET","updatecompleted.php?c="+c+"&i="+i,true);
        xmlhttp.send();
    }
}
