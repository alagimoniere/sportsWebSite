//make an alert box that confirms whether or not a user wants to log out
//on the link button on the top of the page add this: window.confirm("Are you sure you want to log out");
//then add a handler like this:


/**
var r = confirm("Press a button");
if (r == true) {
    x = "You pressed OK!"; //this would log the user in
} else {
    x = "You pressed Cancel!"; //this would not log the user out
}

**/

//custom js


function logOutButtonPressed()
{
	var r = confirm("Are you sure you want to log out");
	if (r == true) {
	    x = "You logged out";
	} else {
	    x = "You cancelled the logout!";
	}//else
}




//window.location = "login.php";