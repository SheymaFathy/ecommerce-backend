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
			<input class="input" type="text" name="name" placeholder="Name">
		</div>
		<div class="form-group">
			<input class="input" type="email" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<input class="input" type="text" name="phone" placeholder="Phone">
		</div>
			<div class="form-group">
		<textarea class="input" type="text" name="msg" placeholder="Massege"></textarea>
		</div>
		<div class="form-group">
            <input class="input" type="date" name="date" placeholder="Date">
		</div>
		<div class="form-group">
			<input class="input" type="time" name="time" placeholder="Time">
		</div>
      
		<div class="form-group">
        <input onclick="order()" class="signup-btn" type="submit" value="Contact Us"><br>

        <?php 
            if (
                isset($_GET['name'])== true && $_GET['name']!=""&&
                isset($_GET['email'])== true && $_GET['email']!=""&&
                isset($_GET['phone'])== true && $_GET['phone']!=""&&
                isset($_GET['msg'])== true && $_GET['msg']!=""&&
                isset($_GET['date'])== true && $_GET['date']!=""&&
                isset($_GET['time'])== true && $_GET['time']!=""){
                $n1 = $_GET['name'];
                $n2 = $_GET['email'];
                $n3 = $_GET['phone'];
                $n4 = $_GET['msg'];
                $n5 = $_GET['date'];
                $n6 = $_GET['time'];
                $con = new mysqli("localhost", "root", "", "ecommerce");
                if ($con->connect_errno)
                die("connect error");
                $r = $con->query("INSERT INTO contact VALUE (null ,'$n1' , '$n2' , '$n3', '$n4', '$n5' , '$n6')");
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