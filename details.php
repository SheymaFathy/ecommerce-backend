<?php 
require_once ("connect.php");
include ("header.php");
include("newsletters.php");?>


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
<body>

  <div class="b-container">
    <div class="options-list">
      <?php
      
      $det = $_GET['det'];
      $details = $con->query("SELECT * FROM product WHERE id = '$det'");
      $row = $details->fetch_array(MYSQLI_ASSOC);

      $imgQuery=$con->query("SELECT * FROM product_images WHERE product_id = ".$row['id']);
      $img = $imgQuery->fetch_array(MYSQLI_ASSOC);
      ?>
        <div class="item">
            <a href="#">
            <img src="https://fastener-inter.com/images/products/<?php echo $img['name'] ?>" width="600">
            </a>
            <div class="desc"><?php echo $row['name']?></div>
        </div>
       
        <div class="details">
           <div class="desc"><?php echo $row['name']?></div>
             <div class="price"><?php echo $row['data']?></div>
             <input onclick="order()" class="order-btn" type="submit" value="ORDER">

		</div>
        </div>
        

       
  
    
</body>
</html>
