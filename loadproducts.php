<?php


include "db.php";

session_start();


$sql = "SELECT * from `products`";




$run_query = mysqli_query($con,$sql);
if ($run_query) {
    if (mysqli_num_rows($run_query) > 0) {
        
        for($i=0; $i<=7; $i++) {
            $row = mysqli_fetch_array($run_query);
            echo "<div class='pro'>";
            echo "<img src=data:image/jpg;base64," .base64_encode($row['product_image']).  " alt='pix'/>";
            echo "<div class='des'>";
            echo "<span>". $row['product_brand'] ."</span>";
            echo "<h5>" . $row['product_title'] . "</h5>";
            echo "<div class='star'>";
            echo "<i class='fas fa-star'></i>";
            echo "<i class='fas fa-star'></i>";
            echo "<i class='fas fa-star'></i>";
            echo "<i class='fas fa-star'></i>";
            echo "<i class='fas fa-star'></i>";
            echo "</div>";
            echo "<h4>$" . $row['product_price'] . "</h4";
            echo "</div>";
            echo "<a href='#products' onclick={checkqt(this.id);false} id=".$row['product_id'] ." <i class='fa-solid fa-cart-shopping'></i></a>";
            echo "</div>";
            echo "</div>";
            
        }
        
        // Free result set
        mysqli_free_result($run_query);
    } else {
        echo "No records found";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
// Close connection
mysqli_close($con);

?>

