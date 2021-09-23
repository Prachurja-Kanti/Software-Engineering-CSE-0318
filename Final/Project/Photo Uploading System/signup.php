 <?php 
	/*session_start();*/
/*require 'includes/dbh.inc.php';*/
?>
<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Sign up</title>

 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

 </head>
 <body onload="slider1()">

 	<div class="signbodyimg">
	 <div class="signslider">
		 <img src="images/sg1.svg" id="sinimg"alt="">
	 </div>
	 </div>	


 	<div class="signup-container">
		 <div class="signimg">
			 <img src="images/sg4.svg" id="imgs" alt="">
		 </div>
 		
 	<h1>Signup</h1>
 	<?php
 	if (isset($_GET["error"])) {
 		if ($_GET["error"] == "emptyfields") {
 			echo '<p class="signuperror">Fill all the fields!</p>';
 		}
 		else if ($_GET["error"] == "invalidmailuid") {
 			echo '<p class="signuperror">Enter valid Username and e-mail!</p>';
 		}
 		else if ($_GET["error"] == "invaliduid") {
 			echo '<p class="signuperror">Enter valid Username!</p>';
 		}
 		else if ($_GET["error"] == "invalidmail") {
 			echo '<p class="signuperror">Enter valid e-mail!</p>';
 		}
 		else if ($_GET["error"] == "passwordcheck") {
 			echo '<p class="signuperror">Your password do not match!</p>';
 		}
 		else if ($_GET["error"] == "usertaken") {
 			echo '<p class="signuperror">Username alrady taken!</p>';
 		}
 	 		 	
 	 }
 		/*else if ($_GET["signup"] == "success") {
 			echo '<p class="signupsuccess">Sugnup successful</p>';
 		}*/
 		else{
 			echo '<p class="signupsuccess">Fillup all</p>';

 		}	  
 	?>
 		<form action="includes/signup.inc.php" method="post">
		<input type="text" name="uid" placeholder="Username">
		<input type="text" name="mail" placeholder="E-mail">
		<input type="password" name="pwd" placeholder="password">
		<input type="password" name="pwd-repeat" placeholder="Repeat-Password">
		<button type="submit" name="signup-submit">Signup</button>

		
	</form>
	<a href="header.php">Login</a>

	</div>

	<script>
		var slideing= document.getElementById("sinimg");
		var images= new Array(
			"images/sg1.svg",
			"images/n1.svg",
			"images/sg2.svg",
			"images/n2.svg",
			"images/sg3.svg",
			"images/lg13.svg",
			"images/sg5.svg",
			"images/sg6.svg",
			"images/n3.svg",
			"images/sg7.svg",
			"images/sg8.svg",
			"images/n4.svg",
			"images/sg9.svg",
			"images/lg8.svg",
			"images/sg10.svg"
		)
		var len =images.length;
		var i =0;
		function slider1(){
			if(i> len-1){
				i=0;
			}
			sinimg.src=images[i];
			i++;
			setTimeout('slider1()',3000);

		}

	</script>
 
 </body>
 </html>
 
 
	


