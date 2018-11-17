 <?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" id="form">
  <!-- FORM START HERE -->
<form action="actions/a_create.php" method="post">
  <div class="form-group">
    <label for="exampleInputPassword1">discription :</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="discription" name="discription">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">type  :</label>
<select name="type">
  <option value="restaurant">restaurant</option>
  <option value="event">event</option>
  <option value="concert">concert</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">image url :</label>
    <input type="text" class="form-control" id="exampleInputimage" placeholder="image" name="image">
  </div>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">restaurant name</label>
    <input type="text" class="form-control" id="exampleInputimage" placeholder="restaurant_name" name="restaurant_name">
  </div>
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">address</label>
    <input type="text" class="form-control" id="exampleInputimage" placeholder="address" name="address">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">web_address</label>
    <input type="text" class="form-control" id="exampleInputimage" placeholder="web_address" name="web_address">
  </div>
  <div id="btn">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
 ADD  ...!
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD NEW RESTAURANT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 YOUR RESTAURANT HAS BEEN ADDED ..<h1>✔</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-success" name="submit">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
</form>
</div>
  
</body>
</html>
