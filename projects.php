<!DOCTYPE html>

<html>

<?php $thisPage="Projects" ?>

<?php include("phpincludes/header.php"); ?>

<body>
	<?php include("phpincludes/navbar.php"); ?>
	<div id="contentBox">
		
	</div>
	<h1>Websites</h1>
	<ul class="projectList">
		<li class="projectItem">
			<a href="http://web.engr.oregonstate.edu/~hainesg/">
				<div class="projectCard">
					<div class="imgDiv">
					<img src="images/site1.png"></img>
					<div class="shadow"></div>
					</div>
					<p><strong>Personal Site</strong></p>
					<p>This website! It was created entirely from scratch using PHP, HTML, CSS, and JS.</p>
				</div>
			</a>
		</li>
		<li class="projectItem">
			<a target="_blank" href="http://www.sunsetchurchofchrist.net">
				<div class="projectCard">
					<div class="imgDiv">
					<img src="images/church.png"></img>
					<div class="shadow"></div>
					</div>
					<p><strong>Sunset Church of Christ</strong></p>
					<p>A simple HTML/CSS website I made for the Sunset Church of Christ in 2018.</p>
				</div>
			</a>
		</li>
	</ul>
	<h1>Programming</h1>
	<ul class="projectList">
		<li class="projectItem">
			<a target="_blank" href="http://web.engr.oregonstate.edu/~hainesg/files/game.zip">
				<div class="projectCard">
					<div class="imgDiv">
					<img src="images/game.png"></img>
					<div class="shadow"></div>
					</div>
					<p><strong>Spaceship Escape</strong></p>
					<p>A text-based science fiction adventure game I created for my CS162 class.</p>
					<p>Includes executable and source code.</p>
				</div>
			</a>
		</li>
	</ul>
	<h1>Other Projects</h1>
	<ul class="projectList">
		<li class="projectItem">
			<a target="_blank" href="http://web.engr.oregonstate.edu/~hainesg/files/LAaCG.zip">
				<div class="projectCard">
					<div class="imgDiv">
					<img src="images/mth261.png"></img>
					<div class="shadow"></div>
					</div>
					<p><strong>Linear Algebra and Computer Graphics</strong></p>
					<p>A paper about the basic applications of linear algebra to 2D and 3D computer graphics.</p>
					<p>Also included is the slideshow for the accompanying presentation.</p>
				</div>
			</a>
		</li>
		<li class="projectItem">
			<a target="_blank" href="https://truthfactor.com">
				<div class="projectCard">
					<div class="imgDiv">
					<img src="images/tf.jpg"></img>
					<div class="shadow"></div>
					</div>
					<p><strong>Truth Factor Live Podcast</strong></p>
					<p>I created and manage the podcast format of a weekly online Bible study.</p>
				</div>
			</a>
		</li>
	</ul>
	<?php include ("phpincludes/footer.php"); ?>
</body>

</html>