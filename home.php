
<?php
ob_start();
session_start();
require_once 'connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
 header("Location: index.php");
 exit;
}
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="css/animate.css">
</head>
<body>
     
  
        


<nav class="navbar navbar-dark bg-warning justify-content-between">
  <a class="navbar-brand" href="index.php">HOME</a>
  <a class="navbar-brand" href="restaurant.php">restaurant</a>
    <a class="navbar-brand" href="concert.php">concert</a>
     <a class="navbar-brand" href="place.php">event</a>
           Hi <?php echo $userRow['userName']; ?>
            
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
<center><h2>RESTAURANT</h2><center>
	<hr>
<?php include 'restaurant.php'; ?><hr>
<center><h2>EVENTS</h2><center>
	<hr>
	<?php include 'place.php'; ?>
<center><h2>concert</h2><center>
	<hr>
	<?php include 'concert.php'; ?>
  
</body>
</html>
<?php ob_end_flush(); ?>