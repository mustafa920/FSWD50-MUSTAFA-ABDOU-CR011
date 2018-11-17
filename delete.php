
<?php

 

require_once 'connect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM restaurant WHERE restaurant_id = {$id}";

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

 

    $conn->close();

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Delete User</title>

</head>

<body>

 

<h3>Do you really want to delete this user?</h3>

<form action="actions/a_delete.php" method="GET">

 

    <input type="hidden" name="restaurant_id" value="<?php echo $data['restaurant_id'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="admin_index.php"><button type="button">No, go back!</button></a>

</form>

 

</body>

</html>

 

<?php

}

?>