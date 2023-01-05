<?php

session_start();

$conn = mysqli_connect("localhost","root","","event photography management system");

if(isset($_POST['Submit'])){

  $name= $_POST['name'];

  $email= $_POST['email'];

  $text= $_POST['text'];


  $sql = "INSERT INTO feedbacks(name, email, text) VALUES('{$name}','{$email}','{$text}')";

  $result = mysqli_query($conn, $sql);

  if($result){

    echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
  }

  else {

    echo "<script type='text/javascript'>alert('error!')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Feedback</title>
	<link rel="stylesheet" type="text/css" href="styles/starrating.css">
    <link rel="stylesheet" href="styles/feedbacks.css">

</head>
<body>

    </div>

    <div class="container">
		<p class="p1">Feel free to give us your feedback!</p>
        <p class="p2">How satisfied are you with our service?</p>
		<div class="rate">
			<input type="radio" id="star5" name="rate" value="5" />
			<label for="star5" title="text">★</label>
			<input type="radio" id="star4" name="rate" value="4" />
			<label for="star4" title="text">★</label>
			<input type="radio" id="star3" name="rate" value="3" />
			<label for="star3" title="text">★</label>
			<input type="radio" id="star2" name="rate" value="2" />
			<label for="star2" title="text">★</label>
			<input type="radio" id="star1" name="rate" value="1" />
			<label for="star1" title="text">★</label>
		</div>
        
		<form action="" method="post">
           
            <div class="id">
                <input type="text" id="name" name="name" placeholder="Enter your Full Name : ">
                <i class="far fa-envelope"></i>
            
                <input type="email" id="email" name="email" placeholder="Enter your Email Address : ">
                <i class="far fa-envelope"></i>
            </div>
            <textarea cols="21" rows="5" id="text" name="text" placeholder="Enter your Feedback : "></textarea>
            <button name="Submit">Submit</button>



        </form>


    <div>
      
    <a href="Home Page.php">
			<center><button style="color:black;border-color:#00fff0;;border-radius: 5px;background-color: black;color: white; ">Go back to homepage</button></center>
		</a>
    </div>


</body>
</html>