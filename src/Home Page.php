<html>
	<head>
		
		<title>The CameraCrew</title>
		
		<!--Linking css-->
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<!--Linking javascript-->
		<script src="js/Homepage.js"></script>
		
		<!--Footer icons-->

		<link href='https://fonts.googleapis.com/css?family=Armata' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<style>hr.new4 {border: 3px solid black;}</style>
	</head>
	
<body>

<!--Add logo -->
	<center><img src = "images/Logo2.png"></center>
<!--Navigation bar--><!--References -> https://www.w3schools.com/-->
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
		
<!--Slide show--><!--References -> https://www.w3schools.com/-->

<div class="manual-slideshow-container">
	<div class="mySlides fade" style="display: block;">
	<img src="images/slideshow 1.png" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img src="images/slideshow 2.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img src="images/slideshow 3.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img src="images/slideshow 5.png" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img src="images/slideshow 6.png" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img src="images/slideshow 7.png" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img src="images/slideshow 8-2.jpg" style="width:100%">
	</div>
	
	<div class="mySlides fade">
	<img src="images/slideshow 9.png" style="width:100%">
	</div>
	
</div>
	<br>
	
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
	<br>
	
	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span> 
	  <span class="dot" onclick="currentSlide(2)"></span> 
	  <span class="dot" onclick="currentSlide(3)"></span>
	  <span class="dot" onclick="currentSlide(4)"></span> 
	  <span class="dot" onclick="currentSlide(5)"></span>
	  <span class="dot" onclick="currentSlide(6)"></span>
	  <span class="dot" onclick="currentSlide(7)"></span>
	  <span class="dot" onclick="currentSlide(8)"></span>
	</div>
	 
<!--End of slide show-->
	
	<hr class =new4>
	
	<div style ='margin: 20px 50px 100px 50px;'> <!--This is a margin-->
	<?php
	echo 
   "<CENTER> <h1>Recent Events</h1></CENTER><br>
	<p class = 'p'>One of the most well-known businesses in the world is Event Photography. It's something that every special occasion these days is heading to. 
	Professional Photographers are in high demand these days, thanks to the growing trend. 
	They add to the significance of the occasion, whether it is Weddings, Birthdays, Office celebrations, or Family gatherings. 
	This has grown to be one of the most significant and expanded commercial markets. 
	Not only that, but they also evoke feelings of love and happiness, as well as memories. We believe relationships define who we are. 
	They encapsulate everything that it means to be a live human being. They change, breathe, and give meaning to the world.
	Our lives are transformed, breathed, and given meaning by them. 
	This idea motivates us to build long-term relationships with our clients, capture genuine emotion, and tell your story. 	
	The story of your connections will be revealed page by page, beginning with our first meeting and ending with the exhibition of your intriguing images. 
	It's about your love, your life, and your narrative. Make it a story that will be remembered. Allow us to capture and produce some of your most memorable moments. 
	Take a peek at what we've done for others to get a better idea of what we can do for you.</p><br>
	
	<table width = '100%'>
	<tr>
		<td><center><img src ='images/Recent events/photo1.png' width ='80%' , alt='william bday' ></td></center>
		<td><center><img src ='images/Recent events/photo2.jpg' width ='80%' , alt='adam and eve wedding' ></td></center>
		<td><center><img src ='images/Recent events/photo3.jpg' width ='80%' , alt='graduation' ></td></center>
	</tr>
	<tr>
	
		<td><center><h3><a href='Birthday Parties.php'>William's 27th birthday</a></h3></center></td>
		<td><center><h3><a href='Weddings.php'>Adam and Anne's Wedding</a></h3></td></center>
		<td><center><h3><a href='Graduations.php'>Eastwood High Graduation 2019</a></h3></td></center>
	</tr>
	<tr>
		<td><center><img src ='images/Recent events/photo4.jpg' width ='80%' , alt='fashion show' ></td></center>
		<td><center><img src ='images/Recent events/photo5.jpg' width ='80%' , alt='music feast' ></td></center>
		<td><center><img src ='images/Recent events/photo6.jpg' width ='80%' , alt='religious event' ></td></center>
	</tr>
	<tr>
		<td><center><h3><a href='Fashion Shows.php'>Stylists’ Bonanza 2018</a></h3></td></center>
		<td><center><h3><a href='Musical Shows.php'>Acapella Fest 2019</a></h3></td></center>
		<td><center><h3><a href='Religious Events.php'>Semana Santa</a></h3></td></center>
	</tr>
	</div>
	
	</table>
	"?>
	</div>
	
<!---Footer----><!--References -> https://www.w3schools.com/-->
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
		
		<!--Chat--><!--References -> https://www.w3schools.com/-->
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