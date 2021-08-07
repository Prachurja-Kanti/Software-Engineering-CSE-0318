<?php 
session_start();
/*require 'includes/dbh.inc.php';*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="out">
	<a href="includes/logout.inc.php">Logout</a> 
	</div>

	<div class="fon">
	<h1>WELCOME <?php echo $_SESSION['userUid']; ?></h1>
	<h2>View PHOTO here!!</h2>
	</div>
	

</body>
</html>