<?php require_once 'connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/animate.css">
    <title>code-review-10</title>
</head>
<body>


<nav class="navbar navbar-info bg-dark justify-content-between">
  <a class="navbar-brand" href="index.php">HOME</a>
  <a class="navbar-brand" href="restaurant.php">restaurant</a>
    <a class="navbar-brand" href="concert.php">concert</a>
     <a class="navbar-brand" href="place.php">event</a>
   <h2>ADMIN</h2>
         <a href="logout.php?logout">Sign Out</a>
  <form class="form-inline">
<div id="reality" class="glass"  class="float-right">
  <label for="switcheroo" class="timeframe panel">
  <?php $d=date("D/m/y");echo"<strong>".$d."</strong>";
 ?>
  <?php $m=date("h.i.s");echo"<em>".$m."</em>";
 ?>
    <time></time>
        </a>
  </label>
  </div>
  </form>
</nav>

 
    <?php 

 $sql = "SELECT * FROM restaurant";

            $result = $conn->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
    print("<div id='main' class='container wow slideInLeft'><div class='row'><div class='col-lg-6 col-md-12 col-sm-12 mb-5 pl-2'><img src='".$row['image']."'class='img-thumbnail' id='img' alt='Cinque Terre' width='400' 
         height='350'></div><div id='sec' class='col-lg-6 col-md-6 col-sm-12'><p><p><span>DISCRIPTION : </span>".$row["description"]."</p><p><span>TYPE :</span> ".$row["type"]."</p><p> <span>STATUS :</span>".$row["address"]."</p><div>
         <a href='update.php?id=".$row['restaurant_id']."'><button type='button' class='btn btn-outline-success'>Edit</button></a>
         <a href='delete.php?id=".$row['restaurant_id']."'><button type='button' class='btn btn-outline-danger'>Delete</button></a>
         </div></div></div></div><hr>");
}
   } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>
 <?php 

 $sql1 = "SELECT * FROM place";

            $result1 = $conn->query($sql1);

 

            if($result1->num_rows > 0) {

                while($row1 = $result1->fetch_assoc()) {
    print("<div id='main' class='container wow slideInLeft'><div class='row'><div class='col-lg-6 col-md-12 col-sm-12 mb-5 pl-2'><img src='".$row1['image']."'class='img-thumbnail' id='img' alt='Cinque Terre' width='400' 
         height='350'></div><div id='sec' class='col-lg-6 col-md-6 col-sm-12'><p><p><span>DISCRIPTION : </span>".$row1["description"]."</p><p><span>TYPE :</span> ".$row1["type"]."</p><p> <span>STATUS :</span>".$row1["address"]."</p><div>
         <a href='update.php?id=".$row1['place_id']."'><button type='button' class='btn btn-outline-success'>Edit</button></a>
         <a href='delete.php?id=".$row1['place_id']."'><button type='button' class='btn btn-outline-danger'>Delete</button></a>
         </div></div></div></div><hr>");
}
   } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>

 <?php 

 $sql = "SELECT * FROM concert";

            $result = $conn->query($sql);

 

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {
    print("<div id='main' class='container wow slideInLeft'><div class='row'><div class='col-lg-6 col-md-12 col-sm-12 mb-5 pl-2'><img src='".$row['image']."'class='img-thumbnail' id='img' alt='Cinque Terre' width='400' 
         height='350'></div><div id='sec' class='col-lg-6 col-md-6 col-sm-12'><p><p><span>ticket price : </span>".$row["ticket_price"]."</p><p><span>Event Date :</span> ".$row["EventDate"]."</p><p> <span>EventTime :</span>".$row["EventTime"]."</p><div>
         <a href='update.php?id=".$row['concert_id']."'><button type='button' class='btn btn-outline-success'>Edit</button></a>
         <a href='delete.php?id=".$row['concert_id']."'><button type='button' class='btn btn-outline-danger'>Delete</button></a>
         </div></div></div></div><hr>");
}
   } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }

            ?>


           
</body>
</html>