<?php

session_start();

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>home page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body><header>
		<nav>
			<h1>Green House</h1>
			<ul id="nav">
				<li><a class="homered" href="#">HOME</a></li>
				<li><a class="homeblack" href="aboutus.html">ABOUT PLANTS</a></li>
				<li><a class="homeblack" href="#">ADMINISTRATOR</a></li>
				<li><a class="homeblack" href="#">FEEDBACK   </a></li>
			</ul>
		</nav>
		<nav id="UserDetail">
			<div id="UDChild">
				<div>
					Welcome
					<?php
						echo $_SESSION['L_UN'];
					?>
				</div>
				<div>
					<a class="homeblack"  href="LogOut.php">Log Out</a>
				</div>
			</div>
		</nav>
	</header>
	<div class="divider"></div>
	
		<div class="carousel">
			<ul>
				<li>
					<div class="carousel-container">
						<img src="image/flowers-petals-plants-39517.jpg" width="100%" height="100%"> 
					</div>

				</li>
				<li>
					<div class="carousel-container">
						<img src="image/soap-bubble-1958650_960_720.jpg" width="100%" height="100%"> 
					</div>

				</li>
				<li>
					<div class="carousel-container">
						<img src="image/Top-25-Most-Beautiful-Daisy-Flowers.jpg" width="100%" height="100%"> 
					</div>

				</li>
				<li>
					<div class="carousel-container">
						<img src="image/heart-1776746_960_720.jpg" width="100%" height="100%"> 
					</div>

				</li>
			</ul>


		</div>

</body>
</html>