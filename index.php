<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body>

<div class="header">
	<h2 align="center">Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="pic1.php">Stamp order</a>
  <a href="letter.php">letter order</a>
  <a href="cart.php">Catalog information</a>
<a href="checkout.php">Bill Amount</a>

<a href="term.php">Terms and Conditions</a>
<a href="contact.php">Contact number</a>

<link rel="stylesheet" type="text/css" href="style2.css">



    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
<img src="homepage.jpg" 
title="Example Image Link" width="100%" height="100%" />
</div>


		
</body>
</html>