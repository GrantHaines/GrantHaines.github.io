<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function navDown() {
	var x = document.getElementsByClassName("navListItem");
	for (var y = 0; y < x.length; y++) {
		if (x[y].id != "currentpage" && x[y].style.display == "")
			x[y].style.display = "block";
		else if (x[y].id != "currentpage" && x[y].style.display == "block")
			x[y].style.display = "";
	}
}
</script>

<div id="navbar">
	<div id="subBar">
		<div id="splash">
			Grant Haines
		</div>
		<div id="dropDownButton" class="" onclick="navDown()">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		<ul id="navbarList">
			<li class="navListItem" <?php if ($thisPage=="Home") echo " id=\"currentpage\""; ?>><a href="http://web.engr.oregonstate.edu/~hainesg/">Home</a></li>
			<li class="navListItem" <?php if ($thisPage=="About") echo " id=\"currentpage\""; ?>><a href="http://web.engr.oregonstate.edu/~hainesg/about.php">About</a></li>
			<li class="navListItem" <?php if ($thisPage=="Projects") echo " id=\"currentpage\""; ?>><a href="http://web.engr.oregonstate.edu/~hainesg/projects.php">Projects</a></li>
			<li class="navListItem"><a target="_blank" href="http://web.engr.oregonstate.edu/~hainesg/files/resume1.pdf">Resume</a></li>
		</ul>
	</div>
</div>