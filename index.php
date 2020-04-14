<?php
session_start();

if(isset($_SESSION["L_UN"]) && isset($_SESSION["L_Pwd"])){
    if($_SESSION["L_UN"] != "" && $_SESSION["L_Pwd"] != ""){
    		header("Location: home.php");
    }
}
?>
<html>
<head>
	<title>Login Page</title>


<!--Remember DontYou dare to touch or alter This --->
<!-- No Go Area -->
		
		<!-- Firebase App is always required and must be first -->
		<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js"></script> 

		<!-- Add additional services you want to use -->
		<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-auth.js"></script> 
		<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-database.js"></script> 

		<!--<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-firestore.js"></script> 
		<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-messaging.js"></script> 
		<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-functions.js"></script> 
		<script src="https://www.gstatic.com/firebasejs/5.0.4/firebase-storage.js"></script> --> <!-- Comment out (or don't include) services you don't want to use -->

		<script src="Firebase-WebApp.js"></script>

		<!--<script src="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js"></script>-->

		<link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css" /> 
		
<!-- No Go Area -->

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>


<body >
	<header>
		<nav>
			<h1  style = "border-right: 5px solid red; width: 18%; height: 70%;">Green House</h1>
			<ul id="nav">
				<li><a class="homered" href="#">Login Page</a></li>
				<li><a class="homeblack" href="#">Contact</a></li>
				<li><a class="homeblack" href="#">Feedback</a></li>
			</ul>
		</nav>
	</header>
	<div id = "ProgressBar">
		<div id ="red" class = "PB Black">
			<div class = "PB Red">

			</div>
		</div>
	</div>
	<div id="WaitSignal">
		<div id="WSText">
			Text change through jquery coding.
		</div>
	</div>
	<div class="divider"></div>
	<div class="fullimg"></div>
	<div class="loginbox">
		<img src="default-avatar.jpg" class="avatar" />
		<h1>Login Here</h1>
		<p>User name</p>
		<input type="text"  id = "LUsername" placeholder="Enter Username" />
		<p>Password</p>
		<input type="password"  id="LPassword" placeholder="Enter Password" />
		<input type="button" id="Login1" onclick = {viewData($moveRed,$getParentWidth,$getRedWidth,$RedWidthForFutureUse);} value="Login" />
		<a href="#">Lost your password</a><br>
		<a href="#">Don't have an account?</a>
	</div>
	<script type="text/javascript">
		
		var $moveRed = $('#red');
		var $getParentWidth = parseInt($('#ProgressBar').css('width'));
		var $getRedWidth = parseInt($moveRed.css('width'));
		var $RedWidthForFutureUse = $getRedWidth;

	</script>
	

</body>
</html>