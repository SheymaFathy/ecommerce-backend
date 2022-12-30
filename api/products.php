<?php 
require_once ("../connect.php");


if(isset($_GET['cat'])) {
    $cat = $_GET['cat'];
    $product=$con->query("SELECT * FROM product WHERE cat = '$cat'");
  } else {
    $product=$con->query("SELECT product.*, product_images.name as image FROM product, product_images WHERE `product_images`.`product_id` = `product`.`id` limit 100");
  }

header('Content-Type: application/json');


$products = $product->fetch_all(MYSQLI_ASSOC);

$products = array_map(function ($product) {
    $product['image'] = "https://fastener-inter.com/images/products/" . $product['image'];
    return $product;
}, $products);

echo json_encode($products);