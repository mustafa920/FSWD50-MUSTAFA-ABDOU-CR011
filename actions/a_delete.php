<?php

 

require_once '../connect.php';

 

if($_GET) {

    $id = $_GET['restaurant_id'];

 

    $sql = "DELETE FROM restaurant WHERE restaurant_id = {$id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Successfully deleted!!</p>";

        echo "<a href='../admin_index.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error deleting record : " . $conn->error;

    }

 

    $conn->close();

}

 

?>