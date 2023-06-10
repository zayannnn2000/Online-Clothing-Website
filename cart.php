<?php

include "db.php";

session_start();
$id = substr(session_id(), 0,10) ;
$p= $_POST['value'];

$sql = "INSERT INTO `cart` (`pid`, `session_id`) VALUES ('$p', '$id')";
$run_query = mysqli_query($con,$sql);

if ($run_query) {
    echo '<i class="fa-solid fa-check">';

}
