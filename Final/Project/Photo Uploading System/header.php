<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body onload="slider()">
	
	<div class="imgbody">
		<div class="slider">
		 <img src="images\lg5.svg" id="slideimg" >
		 </div>
	</div>

	<div class="login-container ">
	<div class="imglog">
		<img src="images\log.svg" id="im">
		</div>
		<div class="col-md-6 login-left">
		<h1>Login</h1>
		<?php 
	
	if (isset($_SESSION['userUid'])) {

		echo '<p>You are logged in! <a href="home.php">Click Here </a></p>';
		
}
else{
	echo '<p>You have to login!</p>';

}

?>
			<form action="includes/login.inc.php" method="POST">
				<input type="text" name="mailuid" placeholder="Usename/ Email...">
				<input type="password" name="pwd" placeholder="Password...">
				<button type="submit" name="login-submit" class="btn btn-primary">Login</button>
				
			</form>
			<div class="link">
			<a href="signup.php">Signup</a>
			</div>

		</div>
			
		</div>
		
        <!-- images slider animation -->
		<script>
		var slideimg = document.getElementById("slideimg");
		var images = new Array(
			"images/lg5.svg",
			"images/lg8.svg",
			"images/lg12.svg",
			"images/n5.svg",
			"images/lg4.svg",
			"images/n6.svg",
			"images/lg3.svg",
			"images/lg11.svg",
			"images/n7.svg",
			"images/lg2.svg",
			"images/lg7.svg",
			"images/n8.svg",
			"images/lg1.svg",
			"images/lg10.svg",
			"images/lg6.svg",
			"images/n9.svg",
			"images/lg9.svg",
			"images/n10.svg"
		);
		var len =images.length;
		var i =0;
		function slider(){
			if(i> len-1){
				i=0;
			}
			slideimg.src=images[i];
			i++;
			setTimeout('slider()',3000);

		}


		</script>
	

		
	
	</body>
	
 </html>
	