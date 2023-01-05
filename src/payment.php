<?php

	$conn = new mysqli("localhost", "root", "", "event photography management system
");
	
	//check connection
	
	if($conn -> connect_error)
	{
		die("Connection failed: " .$conn -> connect_error);
	}
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$user_id = $_POST['user_id'];
	$reciept_id = $_POST['reciept_id'];
	$street_address = $_POST['street_address'];
	$city = $_POST['city'];
	$state_province = $_POST['state_province'];
	$zipcode = $_POST['zipcode'];
	$phone = $_POST['phone'];
	$payment_type = $_POST['payment_type'];
	$cardholder_name = $_POST['cardholder_name'];
	$card_number = $_POST['card_number'];
	$expiry_date = $_POST['expiry_date'];
	$cvc_number = $_POST['cvc_number'];
	
	$sql = "INSERT INTO paymentdetails (first_name, last_name, user_id, reciept_id, street_address, city, state_province, zipcode, phone, payment_type, cardholder_name, card_number, expiry_date, cvc_number)
			VALUES ('$first_name', '$last_name', '$user_id', '$reciept_id', '$street_address', '$city', '$state_province', '$zipcode', '$phone', '$payment_type', '$cardholder_name', '$card_number', '$expiry_date', '$cvc_number')";
	
	if ($conn -> query($sql) === TRUE)
	{
	  echo "New record created successfully into the database....";
	} 
	else
	{
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	
	
?>
	
