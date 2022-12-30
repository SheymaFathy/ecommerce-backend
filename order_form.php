<?php 
require_once ("connect.php");
include ("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/8a9bbf9b04.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/myjs.js"></script>
   <title>index</title>
</head>
<body >
<div class="b-container">
<div class="billing-details">
	<div class="section-title">
		<h3 class="title">Order Details</h3>
	</div>
    <form method="get" action="#">
		<div class="form-group">
			<input class="input" type="text" name="quantity" placeholder="Quantity"required="required">
		</div>
		<div class="form-group">
			<input class="input" type="email" name="email" placeholder="Email" required="required">
		</div>
		<div class="form-group">
			<input class="input" type="text" name="address" placeholder="Address" required="required">
		</div>
			<div class="form-group">
		<input class="input" type="text" name="city" placeholder="City" required="required">
		</div>
		<div class="form-group">
            <input class="input" type="text" name="country" placeholder="Country" required="required">
		</div>
		<div class="form-group">
			<input class="input" type="tel" name="tel" placeholder="Phone No." required="required">
		</div>
        <div class="form-group">
			<input class="input" type="zip" name="zip" placeholder="Zip Code"required="required">
		</div>
		<div class="form-group">
        <input onclick="order()" class="signup-btn" type="submit" value="Submit Order"><br>

        <?php 
            if (
                isset($_GET['quantity'])== true && $_GET['quantity']!=""&&
                isset($_GET['email'])== true && $_GET['email']!=""&&
                isset($_GET['address'])== true && $_GET['address']!=""&&
                isset($_GET['city'])== true && $_GET['city']!=""&&
                isset($_GET['country'])== true && $_GET['country']!=""&&
                isset($_GET['tel'])== true && $_GET['tel']!=""&&
                isset($_GET['zip'])== true && $_GET['zip']!=""){
                $n1 = $_GET['quantity'];
                $n2 = $_GET['email'];
                $n3 = $_GET['address'];
                $n4 = $_GET['city'];
                $n5 = $_GET['country'];
                $n6 = $_GET['tel'];
                $n7 = $_GET['zip'];
                $con = new mysqli("localhost", "root", "", "ecommerce");
                if ($con->connect_errno)
                die("connect error");
                $r = $con->query("INSERT INTO my_order VALUE (null ,'$n1' , '$n2' , '$n3', '$n4', '$n5' , '$n6' , '$n7')");
                if ($con->affected_rows == 0)
                echo "faild";
                }?>
			<label for="create-account">
			<span></span>
			Don't have an account?
			</label>   
        </form>
        <div>
                <?php
                include("newsletters.php")
                ?>
            </div>
			</div>
		</div>
</div>
    </div>


</body>
</html>