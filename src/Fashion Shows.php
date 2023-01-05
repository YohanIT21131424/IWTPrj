<html>
	<head>
		<title>
			Fashion Shows
		</title>
		<!--Linking css-->
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<!--Linking js-->
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
		
	<div style ='margin: 20px 50px 100px 50px;'>
		
		<center> <h1>Fashion Shows</h1></center><br>
	<p class = 'p'>It's critical not to miss a shot during a fashion show. 
	This means getting your settings dialed in ahead of time; you don't want to be 
	fiddling with them while the models are walking down the runway. </p><br>
	
		
	<table width = "100%">
	<tr>
		<td><center><img src ="images/Fashion show/1.jpg" width ="80%" , alt="william bday" ></td></center>
		<td><center><img src ="images/Fashion show/2.jpg" width ="80%" , alt="adam and eve wedding" ></td></center>
		<td><center><img src ="images/Fashion show/3.jpg" width ="80%" , alt="graduation" ></td></center>
	</tr>
	<tr>
		<td><center><img src ="images/Fashion show/4.jpg" width ="80%" , alt="fashion show" ></td></center>
		<td><center><img src ="images/Fashion show/5.jpg" width ="80%" , alt="music feast" ></td></center>
		<td><center><img src ="images/Fashion show/6.jpg" width ="80%" , alt="religious event" ></td></center>
	</tr>
	<tr>
		<td><center><img src ="images/Fashion show/7.jpg" width ="80%" , alt="fashion show" ></td></center>
		<td><center><img src ="images/Fashion show/8.jpg" width ="80%" , alt="music feast" ></td></center>
		<td><center><img src ="images/Fashion show/9.jpg" width ="80%" , alt="religious event" ></td></center>
	</tr></div></table></div>
		
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