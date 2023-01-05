<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event photography management system";


//Create a Connection
$connection = new mysqli($servername, $username, $password, $dbname);


//Check the Connection
if ($connection->connect_error)
{
	die("Connection is failed: " . $connection->connect_error);
}

?>

