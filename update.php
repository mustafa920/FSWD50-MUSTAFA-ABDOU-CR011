<?php

 

require_once 'connect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql1 = "SELECT * FROM restaurant WHERE restaurant_id = {$id}";

    $result = $conn->query($sql1);

 

    $data = $result->fetch_assoc();

 

    $conn->close();

 

?>


<!DOCTYPE html>

<html>

<head>

    <title>Edit User</title>

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

 

<fieldset>

    <legend>Update media</legend>

 

    <form action="actions/a_update.php" method="GET">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>address</th>
  <td><input type="text" name="address" placeholder="address" value="<?php echo $data['address'] ?>" /></td>

            </tr>     


<tr>

                <th>image</th>

                <td><input type="text" name="image" placeholder="image" value="<?php echo $data['image'] ?>" /></td>

            </tr>
            <tr>

                <input type="hidden" name="restaurant_id" value="<?php echo $data['restaurant_id']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="admin_index.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 


 

</body>

</html>

 

<?php

}

?>