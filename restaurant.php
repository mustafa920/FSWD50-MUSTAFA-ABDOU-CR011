<?php include 'connect.php'; ?>
<?php 

$sql= "SELECT * FROM restaurant ";
$result = mysqli_query($conn,$sql);

$newarray = $result->fetch_all(MYSQLI_ASSOC);

foreach ($newarray as $key) {
	print("<div id='main' class='container wow slideInLeft'><div class='row'><div class='col-lg-6 col-md-12 col-sm-12 mb-5 pl-2'><img src='".$key['image']."'class='img-thumbnail' id='img' alt='Cinque Terre' width='400' 
		 height='350'></div><div id='sec' class='col-lg-6 col-md-6 col-sm-12'><p><span> restaurant name :</span> ".$key["restaurant_name"]."</p><p><span> web_address :</span> ".$key["web_address"]."</p><p><span>type : </span>".$key["type"]."</p><p><span>address :</span> ".$key["address"]."</p><p> <span>description :</span>".$key["description"]."</p></div></div></div><hr>");
}


 ?>