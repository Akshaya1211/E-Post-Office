<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$address="";
$city="";
$state="";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER

  // receive all input values from the form
if (isset($_POST['out_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state= mysqli_real_escape_string($db, $_POST['state']);
	$query = "INSERT INTO user (username, email, address,city,state) 
  			  VALUES('$username', '$email', '$address','$city','$state')";
  	mysqli_query($db, $query);
	header('location: hello.php');
	
}



  


?>