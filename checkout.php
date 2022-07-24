<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "registration"); 


if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(   
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                       
                }  
           }  
      }  
 }

	

if(isset($_POST["add_to_cart1"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                       
                }  
           }  
      }  
 }

	
















?>


<html>
<head>
<body bgcolor="#E6E6FA">

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="pic1.php">Stamp order</a>
  <a href="letter.php">letter order</a>
  <a href="cart.php">Catalog information</a>
<a href="checkout.php">Bill Amount</a>

<a href="term.php">Terms and Conditions</a>
<a href="contact.php">Contact number</a>


<link rel="stylesheet" type="text/css" href="style2.css">

</div>


	<h1 align="center">TOTAL BILL AMOUNT</h1>

                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               
                               
                                
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          
                          <?php  
                          }  
                          ?>  
                     
                </div> 
	
	
	<center>
 	<table border="7">
  <tr><td>Bill Amount</td><td>
<?php
	echo"Rs.","$total";
?>

</td>
  <tr><td>Tax-15%</td><td>
<?php
$total1=($total*15)/100;
echo "Rs.","$total1";

?>
<tr><td>Shipping Charges</td><td>Rs.50</td></tr>
  <tr><td>Total Amount</td><td>
<?php
$total2=$total+$total1+50;
echo"Rs.","$total2";
?>


</td>
</table>
</center>
              


                </div>  
           </div>  
	
           <br /> 

 <center>          <br /> 
<input type="button" color="green" value="buy" onclick="window.location.href='buy.php'" />
</center>

</body>
</head>

</html>

