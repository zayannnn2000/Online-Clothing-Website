<?php


include "db.php";

session_start();

$p= $_POST['value'];



//echo substr($p,0,1 );

$sql = "SELECT `quantity` FROM `products` WHERE `product_id` = $p";

$run_query = mysqli_query($con,$sql);

$row = mysqli_fetch_array($run_query);

echo $row['quantity'];

?>