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
	<style>
</style>

</head>
<body>
	<div class="lin">
	<div><img src="images\pro.svg" id="p1"></div>
	<div><img src="images\pho1.svg" id="p2"></div>	
	<div><img src="images\sett.svg" id="p3"></div>
	</div>

	<div class="fon">
	<h1>WELCOME <?php echo $_SESSION['userUid']; ?></h1>
	<h2>Upload PHOTO here!!</h2>
	</div>

	<div class="up"> <h2><strong>Uploaded Images:</strong></h2></div>
	<div class="cont">
	<?php
		include('conn.php');
		$query=mysqli_query($con,"select * from image_tb");
		if(mysqli_num_rows($query) > 0){
			while($row=mysqli_fetch_array($query)){
				?>
					<img src="<?php echo $row['img_location']; ?>">
				<?php
			}
		}else{
			echo "<p><strong>No Images uploaded yet.</strong></p>";
		}
	?>
	</div>
	<br>
	<br>
	
	<div class="uploadbar">
	<form method="POST" action="upload.php" enctype="multipart/form-data">
	<label id="fimg">Image:</label><input type="file" name="image" accept="image/*">
	<button type="submit" id="bsub">Upload</button>
	</div>
	<br>
	<br>
	<br>
	<div>
	<a href="includes/logout.inc.php" id="out">Logout</a> 
	</div>

	<div class="logo">
	<div><a href="https://www.facebook.com/" target="_blank"><img src="images\face.png" id="fa" ></a></div>
	<div><a href="https://www.google.com/" target="_blank"><img src="images\google.png" id="go"></a></div>
	<div><a href="https://www.instagram.com/" target="_blank"><img src="images\insta.png" id="ins"></a></div>
	<div><a href="https://twitter.com/" target="_blank"><img src="images\twi.png" id="tw"></a></div>
	</div>
	
	<div class="pra">
		<p>Simple Photo Gallery is developed using PHP, CSS, Bootstrap, and Database. 
			Talking about the project, it contains a user side where a user can post photos easily. 
			This project contains limited features which is only related to a photo gallery. In this project,
			 the user has to perform all the main functions from the user side.Talking about the features of the Simple Photo Gallery, 
			 the user has can easily add photos. For this, the user has to browse his/her photos and provide a 
			 suitable photo caption. All the photos are displayed in a responsive grid style. The user can also click to a 
			 certain image file to view in large size and check the caption.</p>
	</div>
	<div class="prag">	
	<h1>This Project is devloped by Prachurja Kanti Barman Praggo<h2>
		<h2>E-mail: prachurjapraggo@gmail.com</h2>
		</div>
		<footer>
	<p>Created by Prachurja Kanti. © 2021</p>
</footer
	</form>
	</div>

</body>
</html>