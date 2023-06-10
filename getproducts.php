<?php


include "db.php";

session_start();


$sql = "SELECT * from `products`";




$run_query = mysqli_query($con,$sql);
if ($run_query) {
    if (mysqli_num_rows($run_query) > 0) {
        echo '<table border="1px">';
        echo "<tr>";
        echo "<th>Product Name</th>";
        echo "<th>Price (BDT)</th>";
        echo "<th>Description</th>";
        echo "<th>Category</th>";
        echo "<th>Image</th>";
        echo "</tr>";
        header("Content-type: image/png"); 
        while ($row = mysqli_fetch_array($run_query)) {
        
            echo "<tr>";
            echo "<td>" . $row['product_title'] . "</td>";
            echo "<td>" . $row['product_price'] . "</td>";
            echo "<td>" . $row['product_desc'] . "</td>";
            echo "<td>" . $row['product_cat'] . "</td>";
            
            echo "<td><img src= data:image/png;base64," .base64_encode($row['product_image']). " /></td>";
            echo "</tr>";
        }
        echo "</table>";
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


