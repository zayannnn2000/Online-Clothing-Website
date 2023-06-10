<?php


include "db.php";

session_start();

$id=substr(session_id(), 0,10) ;


$presql = "SELECT * from `cart` WHERE `session_id` = '$id'";
$prerun_query = mysqli_query($con,$presql);
$pid=array();
$total= 0;

if ($prerun_query) {
    if (mysqli_num_rows($prerun_query) > 0) {
        while ($row = mysqli_fetch_array($prerun_query)) {
            array_push($pid, $row['pid']);
        }
    }
}

foreach ($pid as $value) {
    
$sql = "SELECT * from `products` WHERE `product_id` = '$value'";

$run_query = mysqli_query($con,$sql);
if ($run_query) {
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
        
            echo "<tr>";
            echo "<td><img src= data:image/png;base64," .base64_encode($row['product_image']). " /></td>";
            echo "<td>" . $row['product_title'] . "</td>";
            echo "<td>" . $row['product_price'] . "</td>";
            echo "<td><input type='number' value='1'> </td>";
            echo "<td>" . $row['product_price'] . "</td>";
            echo "<td><a href='#'><i class='far fa-times-circle'></i></a></td>";        
            echo "</tr>";

            $total += $row['product_price'];
        }
       

        
    } else {
        echo "No records found";
    }
    
    

} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}

    echo "<section id='cart-add' class='section-p1'>";
    // Free result set
    echo "<div id='subtotal'>";
    echo " <h3>Cart Totals</h3>";
    echo "<table>";
    echo "<tr>";
    echo "<td>Cart Subtotal</td>";
    echo "         <td<>" .$total. "</td>";
    echo "         </tr>";
    echo "         <tr>"  ;
    echo "        <td>Shipping</td>";
    echo "         <td<>Free</td>    ";
    echo "         </tr>";
    echo "         <tr>";
    echo "            <td><strong>Total</strong></td>";
    echo "         <td<><strong>" .$total. "</strong></td>    ";
    echo "         </tr>";
    echo "   </table>";
    echo " <a href='payment.php'><button class='normal' >Proceed to payment</button></a>";
    echo "</div>";
    echo "</section>";

$_SESSION['total'] = $total;

// Close connection
mysqli_close($con);

?>

