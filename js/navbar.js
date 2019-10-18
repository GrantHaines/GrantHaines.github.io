/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
	var x = document.getElementById("navBarList");
	if (x.className === "navBarList") {
		x.className += " responsive";
	} else {
		x.className = "navBarList";
	}
}