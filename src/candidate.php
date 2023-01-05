<?php
	require ('config2.php'); //include database connection file
?>
<html>
  <head>
    <title>Career Opportunities</title>

		<!--Linking css-->
		<link rel="stylesheet" type="text/css" href="styles/style_header.css">
		<link rel = "stylesheet" href= "styles/styles_who we are.css" >

		<!--Linking js-->
		<script src="js/Homepage.js"></script>
		<script type="text/javascript" src = "js/who we are.js"></script>

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
			</div>

		<!--Body content-->
		<div class = "content-bk">
    	<center style = "transform: translate(0%, 30%)"><!--to move -->
      	<h1>Career Opprtunities</h1>
    	</center>

			<!--Job vaccancies-->
			<div class = "jbad" style = "transform: translate(0%, 25%)">
				<h2>Photographer, Assistant - job ID (Jb0001)</h2>
				<h3>Full Job Description</h3>
				<ul style = "text-align:left">
					<li>5+ years’ experience in a combination of the following: soft-styling, on location prop styling, and tabletop styling (some experience with watches and jewelry preferred)</li>
					<li>Must be a fashion forward thinker and is current with all design and fashion trends.</li>
					<li>Need to have a wealth of prop resources - know where to shop to find props that that fit the photograph concept.</li>
					<li>Must be able to work within a low budget making props if needed to save on costs.</li>
					<li>Degree in a art/fashion/photography/design related field,InDesign or Photoshop experience preferred</li>
					<li>Must be able to walk, stand, sit, kneel for longer periods of time, Ability to travel 10-15% of the time</li>
					<br/>
				</ul>
			</div>

			<img src="images/wedding2/c_6.jpg " ali= "wed3" width = "300px" style = "transform: translate(320%, -70%)">
			<div class = "jbad" style = "transform: translate(0%, -350%)">
				<h2></br>Assistant Photo Editor - job ID (Jb0002)</h2>
				<h3>Full Job Description</h3>
				<ul style = "text-align:left">
					<li>General departmental administrative work,Preparing and sending out social media packages when stories publish online</li>
					<li>Preparing and sending out social media packages when stories publish online,Preparing and sending out social media packages when stories publish online</li>
					<li>Photo research,pdating the lineup when shoot notices are received,pdating the lineup when shoot notices are received</li>
					<li>Must be able to work within a low budget making props if needed to save on costs.</li>
					<li>Degree in a art/fashion/photography/design related field,InDesign or Photoshop experience preferred</li>
					<li>Must be able to walk, stand, sit, kneel for longer periods of time, Ability to travel 10-15% of the time</li>
				</ul>
			</div>
			<!--Image top of page-->
			<img src="images/wedding2/c_4.jpg " ali= "wed3" width = "1000px" style = "transform: translate(0%, -38%)">

			<!--Job application form-->
			<div class= "jobbox1">
    		<form  class="jobbox" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data"> <!--enctype allows files to be sent through a POST-->
      	<h2>Apply here<h2>

      	<h4>Job ID:
      		<select name = "jbID" required>
        		<option value ="jb0001" checked = "checked">jb0001</option>
        		<option value ="jb0002">jb0002</option>
        		<option value ="jb0003">jb0003</option>
      		</select></br></br>

    		Your Full Name:</br>
    			<input type = "text" name="fname" placeholder = "Full name" required></br></br>

    		Your NIC:</br>
    			<input type = "text" name="nic" placeholder = "881231212v" required></br></br>

    		Your Contact Number:</br>
    			<input type = "phone" name="cnumber" placeholder = "0770101010" required></br></br>

    		Your Email:</br>
    			<input type = "email" name="myemail" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" placeholder = "ashaw_sekara@yahoo.com"></br></br>

    		Please describe,In detail, the depth of your experience</br>
    			<textarea id= "review" name = "details" rows= "8" cols = "80" placeholder = "Describe here"></textarea><br/></br>

    		Attach your resume</br>
    			<input type="file" name = "resume" id = "cv" required></br>
    			Allowed types: .doc, .pdf</br>
    			Max size: 2.0MB</br>

    		<input name = "btnSubmit" type="submit" value = "submit">
    </form>
  </div>
</div>

<!---Footer---->
<div style = "transform: translate(0%, 0%)">
<br/><br/>
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
					<li><a href="https://www.facebook.com/"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></i></a></li>
					<li><a href="https://twitter.com/?lang=en"> <i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</td>
	</tr>

	<tr>
		<td>
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

			<button class="button" style="vertical-align:middle"><span>Feedback </span></button>
			<button class="simpbutton button2">FAQ</button>

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
</div>

<!----------------------------------------------php---------------------------------------------------->
  <?php
    if(isset($_POST['btnSubmit']))
    {
      $target_dir = "CVs/";//cv goes to
      $target_file = $target_dir . basename($_FILES["resume"]["name"]);
      if(isset($_FILES["resume"])) {


        $extension =pathinfo($target_file, PATHINFO_EXTENSION );//by extension type check
        if($extension !== 'pdf' && $extension !== 'docx') {
          echo "<script type = 'text/javascript'>alert('Sorry, only pdf & doc files are allowed....!!!' )</script>";
        }

        else if ($_FILES["resume"]["size"] > 2000000) { // Check file size
          echo "<script type = 'text/javascript'>alert('Error..your file is too large....!!!' )</script>";
        }
        else if (file_exists($target_file))//Check whether file exists
        {
          echo "<script type = 'text/javascript'>alert('File already exists...!!!' )</script>";
        }
        else if(move_uploaded_file($_FILES["resume"]["tmp_name"],$target_file)){
          echo "<script type = 'text/javascript'>alert('CV Successfully submitted...!!!' )</script>";
        }
        else{
          echo "<script type = 'text/javascript'>alert('Error while uploading CV ...!!! Try again' )</script>";
        }
      }
    }

    if(isset($_POST['btnSubmit'])) {
	  $NIC = $_POST['nic'];
	  $Name = $_POST['fname'];
      $tele = $_POST['cnumber'];
      $email = $_POST['myemail'];
      $description = $_POST['details'];
      $jobID = $_POST['jbID'];



    //insert user data into table
    $sql = "INSERT INTO candidate_details(Candidate_NIC,Name,Contact_No,Email,Description,Job_ID) VALUES ('$NIC','$Name','$tele','$email','$description','$jobID')";
    if($conn->query($sql)) {  //reurns boolean value to indicate unsuccessful execution>
      echo "<script type = 'text/javascript'>alert('Details Successfully submitted...!!!' )</script>";
    }
    else {
      echo "<script type = 'text/javascript'>alert('Error while uploading cv. Try again...!!!' )</script>";
    }
	}
	$conn->close(); //close connection
  ?>
  </body>
</html>
