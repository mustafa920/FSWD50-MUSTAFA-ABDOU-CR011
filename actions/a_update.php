<?php
require_once '../connect.php';

if($_GET) {
 $address = $_GET['address'];
$image = $_GET['image'];

$restaurant_id = $_GET['restaurant_id'];

    
    $sql = " UPDATE restaurant SET
     address = ' $address',
        image = '$image' WHERE restaurant_id = {$restaurant_id}";
    if($conn->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$restaurant_id."'><button type='button'>Back</button></a>";

        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();

 

}

 

?>
