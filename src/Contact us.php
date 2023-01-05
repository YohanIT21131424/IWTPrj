<!DOCTYPE html>
<html>
<head>
		<title>Contact Us</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!--Linking css-->
		<link rel="stylesheet" type="text/css" href="styles/style_header.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="styles/Contact Us_styles.css" rel="stylesheet">
		<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"><!--fontawesome.com-->
		
		<!--Linking js-->
		<script src="js/Contact Us_javascript.js" type = "text/javascript"></script>
		
		<!--Footer icons--> 
		<link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
		
		<style>hr.new4 {border: 3px solid black;}</style>
		
</head>
<body>

<!--Add logo -->
<center>
	<img src = "images/Logo2.png">
</center>

<!--Navigation bar-->
<div class = "body">
	<ul class ='NavBar'>
	<li class ='NavBar'><a href="Home Page.php">Home</a></li>
	<li class ='dropdown'><a href="Birthday Parties.php" class="dropbtn">What we do+</a>
	<div class='dropdown-content'>
	<a href='Birthday Parties.php'>Birthday Parties</a>
	<a href='Weddings.php'>Weddings</a>
	<a href='Graduations.php'>Graduations</a>
	<a href='Family Photos.php'>Family Photos</a>
	<a href='Fashion Shows.php'>Fashion Shows</a>
	<a href='Musical Shows.php'>Musical Shows</a>
	<a href='Wild Life.php'>Wildlife</a>
	<a href='Religious Events.php'>Religious Events</a>
</div></li>
<li class ='NavBar'><a href='Gallery.php'>Gallery</a></li>
<li class ='dropdown'><a href='About Us.php' class="dropbtn">About Us</a>

<div class='dropdown-content'>
	<a href='Birthday Parties.php'>Who we are</a>
	<a href='Weddings.php'>Meet our team</a>
	<a href='Graduations.php'>Join with us</a>
</div></li>
<li class ='NavBar'><a href='#'>Contact us</a></li>
<li class ='NavBar'><a href="howtopay.html">How to pay</a></li>
<li class ='NavBar'><input type='text' placeholder='Search...'></li>
</ul>
<br>

<div class = "page">
	<div>

	<h1 id = "eventDetails">Tell us about your event</h1><br><br>

	<?php

	//Linking the configuration file
	require_once ("config.php");

	?>

	<!--form-->
	<form method="post" name = "contactFile" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">  

		<input class = "data" type = "text" name = "name" placeholder = "Name" required><br><br>
		<input class = "data" type = "text" name = "email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder = "E-mail" required><br><br>
		<input class = "data" type = "text" name = "event" placeholder = "Event"><br><br>
		<textarea name = "description" rows="12" cols="50" placeholder = "Description" maxlength = "250"required></textarea><br>
		<input type = "reset" value = "Reset"><br><br><br>
		<input type="file" name= "file"><br><br>
		
		<!--Validate file submission-->
		<?php
			if(isset($_POST["submit"]) && $_POST["submit"]!==""){
			$target_dir = "Uploads/";
			$target_file = $target_dir.basename($_FILES["file"]["name"]);

			if(isset($_FILES["file"]))
			{
				if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file))
				{
					if($_FILES["file"]["size"] > 25000000)
					{
						echo "Sorry, your file is too large.";
					}
					else
					{
					$temp = explode(".", $_FILES["file"]["name"]);
					$newfilename = round(microtime(true)) . '.' . end($temp);
					move_uploaded_file($_FILES["file"]["tmp_name"], "Uploads/" . $newfilename);
					echo"The file ".basename($_FILES["file"]["name"]). " is uploaded.";
					}
				}
			}
			} 
		?> 

		<input type = "submit" id = "submitBtn" name = "submit" value = "submit"  onclick = "enableButton()">

	</form>

	<!--Data entry-->	
	<?php

	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$email = $_POST["email"];
		$event = $_POST["event"];
		$description = $_POST["description"];
		
		$sql = "INSERT INTO event(Name,Email,Event,Description)VALUES('$name','$email','$event','$description')";
		if($connection->query($sql))
		{
			echo "Inserted successfully";
		}
		else
		{
			echo "Error:".$connection->error;
		}
	}

	$connection->close();
	?>

	</div>

	<div class = "contact">
		<h1>We are here</h1><br>
		
		<!--map-->
		<iframe class = "map" src="https://www.google.com/maps/d/u/0/embed?mid=1zs3muKi61S8HpBTS3eCWCj07mX56KtBg" width = "500" height = "375"></iframe><br><br><br>

		<h1>Get in touch with us</h1>
		<article>
			<address>
				<h1 class='fas fa-map-marker-alt'></h1>
				<p class = "map" >No.42,<br>
				Woodland Avenue,<br>
				Kohuwala </p><br>

				<h1 class='fa fa-envelope'></h1>
				<p class = "map" >info@thecameracrew.com</p><br>

				<h1 class='fas fa-phone'></h1>
				<p class = "map" >0113456789</p>
			</address>
		</article>

		<br><br>
	</div>
</div>


</body>
</html>