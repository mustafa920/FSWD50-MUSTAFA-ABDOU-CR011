<?php include 'connect.php'; ?>
<?php 

$sql1= "SELECT * FROM concert ";
$result1 = mysqli_query($conn,$sql1);

$newarray = $result1->fetch_all(MYSQLI_ASSOC);

foreach ($newarray as $key) {
	print("<div id='main' class='container wow slideInLeft'><div class='row'><div class='col-lg-6 col-md-12 col-sm-12 mb-5 pl-2'><img src='".$key['image']."'class='img-thumbnail' id='img' alt='Cinque Terre' width='400' 
		 height='350'></div><div id='sec' class='col-lg-6 col-md-6 col-sm-12'><p><span> concert name :</span> ".$key["concert_name"]."</p><p><span> web_address :</span> ".$key["web_address"]."</p><p><span>address :</span> ".$key["address"]."</p><p> <span>EventTime :</span>".$key["EventTime"]."</p><p> <span>EventDate :</span>".$key["EventDate"]."</p><p> <span>ticket_price :</span>".$key["ticket_price"]."</p></div></div></div><hr>");
}


 ?>