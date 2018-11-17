   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/animate.css">
    <title>code-review-11</title>

  <nav class="navbar navbar-dark bg-warning justify-content-between">
  <a class="navbar-brand" href="../admin_index.php">HOME</a>
  <a class="navbar-brand" href="../create.php">ADD </a>
  <form class="form-inline">
<div id="reality" class="glass"  class="float-right">
  <label for="switcheroo" class="timeframe panel">
  <?php $d=date("D/m/y");echo"<em>".$d."</em>";
 ?>
    <time></time>
        </a>
  </label>
  </div>
  </form>
</nav>

<?php include '../connect.php';

if($_GET){
$discription = $_GET['discription'];
$type = $_GET['type'];
$restaurant_name = $_GET['restaurant_name'];
$image = $_GET['image'];
$address = $_GET['address'];
$web_address = $_GET['web_address'];

$sql1 = "INSERT INTO restaurant (discription, type,restaurant_name,image,address,web_address)

VALUES
                  ('$discription','$type','$restaurant_name','$image','$address','$web_address')";
    if($conn->query($sql1) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

    } else {

        echo "Error " . $sql1. ' ' . $conn->connect_error;

    }

 
  $conn->close();

}

?>