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
<body>
<?php
			if (isset($_POST['btn_search']))
                $search = $_POST['search'];
				$r = $con->query("SELECT * FROM product WHERE name LIKE '%$search%' or data like '%$search%' ");
while (
    $row = $r->fetch_array(MYSQLI_ASSOC)
) {
    $r2 = $con->query("SELECT name FROM product_images WHERE name IS NOT NULL AND product_id=" . $row['id'] . ";");
    $img = $r2->fetch_array(MYSQLI_ASSOC);
    $r3 = $con->query("SELECT full FROM cat WHERE shortcut='" . $row['cat'] . "'");
    $cat_name = $r3->fetch_array(MYSQLI_ASSOC);

?>

<div class="b-container">
    <div class="options-list">
        <div class="item">
            <a href="#">
            <img src="https://fastener-inter.com/images/products/<?php echo $img['name'] ?>" width="600">
            </a>
            <div class="desc"><?php echo $row['name'] ?></div>
        </div>
       
        <div class="details">
           <div class="desc"><?php echo $row['name'] ?></div>
             <div class="price"><?php echo $row['data'] ?></div>

             <input onclick="order()" class="order-btn" type="submit" value="ORDER">

		</div>
        </div>
       <?php }?> 

       
  
</body>
</html>
