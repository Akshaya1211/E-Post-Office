<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "registration"); 


?>
<!DOCTYPE html>  
 <html>  
      <head>  
	
           <title> | STAMPS</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>
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
	
           <br />  
           <div class="container" style="width:700px;" align="center">  
                <h3 align="center">STAMPS</h3><br />  
		<?php  
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                
		
		
                <div  class="col-md-4"  >  
                     <form  method="post" action="cart.php?action=add&id=<?php echo $row["id"] ;  ?>">  
                          <div style="border:1px solid #555; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" align="center" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add To Cart" /> 
				
                          </div>  
                     </form>  
                </div> 
		</center> 
                <?php  
                    }
		} 
                  
		
                ?>  
	
                
	
      </body>  
 </html>
   
