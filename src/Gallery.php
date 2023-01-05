<!DOCTYPE html>
<html>

<head>
		<title>Gallery</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Linking css-->
		<link rel="stylesheet" type="text/css" href="styles/style_header.css">
		
		<!--Linking js-->
		<script src = "js/Gallery_javascript.js" type = "text/javascript"></script>
		
		<!--Footer icons--> 
		<link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>hr.new4 {border: 3px solid black;}</style>
		
</head>

<body>

	<!--Add logo -->
	<center><img src = "images/Logo2.png"></center>

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
		<li class ='NavBar'><a href="Gallery.php">Gallery</a></li>
		<li class ='dropdown'><a href="Who we are.html" class="dropbtn">About Us</a>
		<div class='dropdown-content'>
		<a href="Who we are.html">Who we are</a>
		<a href="Meet our team.html">Meet our team</a>
		<a href="candidate.php">Join with us</a>
		</div></li>
		<li class ='NavBar'><a href="Contact us.php">Contact us</a></li>
		<li class ='NavBar'><a href="howtopay.html">How to pay</a></li>
	<li class ='NavBar'><input type='text' placeholder='Search...'></li>
	</ul>
	<br>

    <!--Gallery images-->
	<div width = "100%">
		<img class = "wedding" src = "images/Hashini_wedding2.jpg" alt = "Wedding" id = "image1" width = "100%">
		<img class = "wedding" src = "images/Hashini_wedding3.jpg" alt = "Wedding" id = "image1" width = "100%" >
		<img class = "wedding" src = "images/Hashini_wedding4.jpg" alt = "Wedding" id = "image1" width = "100%" >
		<img class = "wedding" src = "images/Hashini_wedding1.jpg" alt = "Wedding" id = "image1" width = "100%" >	
	</div>

	<script>

	wedding();
	</script>

		<img class = "graduation" src = "images/Hashini_graduation1.jpg" alt = "Convocation" id = "image2" width="50%" height="490">
		<img class = "music" src = "images/Hashini_music3.jpg" alt = "Wiramaya event" id = "image3" width="49%" height="490">
		
	<div width = "100%">
		<img class = "family" src = "images/Hashini_family4 .jpg" alt = "Maternity shoot" id = "image4" width="100%" height="1000px">
		<img class = "family" src = "images/Hashini_family2.jpg" alt = "Maternity shoot" id = "image4" width="100%" height="1000px">
		<img class = "family" src = "images/Hashini_family1.jpg" alt = "Maternity shoot" id = "image4" width="100%" height="1000px">
		
	</div>

	<script>

	family();
	</script>
		
		<img class = "birthday" src = "images/Hashini_birthday4.jpg" alt = "Birthday party" id = "image5" width="33%" height="722">
		<img class = "fashion1" src = "images/Hashini_fashionshow2.png" alt = "Fashion" id = "image6" width="33%" height="722">
		<img class = "fashion2" src = "images/Hashini_fashionshow1.png" alt = "Fashion" id = "image6" width="33%" height="722">
		
	<div>
		<img class = "wildlife" src = "images/Hashini_wildlife1.jpg" alt = "Wildlife" id = "image7" width="100%" height="1700px">
		<img class = "wildlife" src = "images/Hashini_wildlife2.jpg" alt = "Wildlife" id = "image7" width="100%" height="1700px">
		<img class = "wildlife" src = "images/Hashini_wildlife4.jpg" alt = "Wildlife" id = "image7" width="100%" height="1700px">
		<img class = "wildlife" src = "images/Hashini_wildlife3.jpg" alt = "Wildlife" id = "image7" width="100%" height="1700px">
		<img class = "wildlife" src = "images/Hashini_wildlife5.jpg" alt = "Wildlife" id = "image7" width="100%" height="1700px">
	</div>

	<script>

	wildlife();
	</script>
		

	<!---Footer---->
<footer class="social-footer">
	  <div class="social-footer-left">
		<table>
		<tr>
		<td>
		<center><img src="images/Logo2.png" style="width:65%"></center>
		</td>
		<td>
		 
		<div class="social-footer-icons">
		<ul class="menu simple">
		  <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		  <li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		  <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
		  <li><a href="https://twitter.com/?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		</ul>
		</div>
		</td></tr>
		
		<tr><td>
		<div style ='text-align:left;margin: 30px 30px 30px 60px ;'>			
				<b>The CameraCrew (Pvt) Ltd </b><br>
				Address : 123 Main Street, Colombo<br>
				Fax : +1 323 555 1234<br>
				Phone : +94 113456789<br><br>
			 
		</div>
		</td>
		<td align = "right">
		<h2>Follow us on our socials</h2><br>
		<img src="images/qr code.png" align = "right" style="width:10%">
		<br><br><br><br><br><br><br>
		
		<a href="feedbacks.php"><button class="button" style="vertical-align:middle"><span>Feedback </span></button></a>
		<a href="FAQ.php"><button class="simpbutton button2">FAQ</button></a>
		
		</tr>
		<tr><td>
		
		<!--Chat-->
			<div class="chat-popup" id="myForm">
			  <form action="/action_page.php" class="form-container">
				<h1>Chat with us</h1>

				<label for="msg"><b>Message</b></label>
				<textarea placeholder="Type message.." name="msg" required></textarea>

				<button type="submit" class="btn">Send</button>
				<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
			  </form>
			</div>
			</td><br>
		<td align = "right"></td>
		<td align = "right"></td></tr>
		
	  </table>
	  
	 </div>
</footer>

</body>

</html>