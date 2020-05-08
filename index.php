<?php
include 'conn.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uske Number</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body class="bg-dark">
<div class="container mt-3">
<nav class="navbar bg-dark border-warning navbar-dark border rounded">
    <h3 class="text-primary">Uske Number...</h3>
    <a class="text-right mb-1" href="uske_new_N.php"><img src="images/new.png"/></a>
    <input class="form-control" id="myInput" type="text" placeholder="Search">
   </nav>
  <br>
  <table class="text-center border table-bordered table table-dark table-hover">
<thead>
        <th>Naam</th>
        <th>Number</th>
</thead>
<tbody id="myTable">
  <?php
$select = "select * from _______";
$selectqueryfire = mysqli_query($______,$select);
$numofrow = mysqli_num_rows($selectqueryfire);
$id = 1;

  while($numofrow!=0){
      $select2 = "select * from _______ where id = $id";
      $selectqueryfire2 = mysqli_query($______,$select2);
      $selectarray2 = mysqli_fetch_array($selectqueryfire2);
      $db_u_number = $selectarray2['_______'];
      while($db_u_number==""){
          $id ++;
          $select2 = "select * from _______ where id = $id";
      $selectqueryfire2 = mysqli_query($_______,$select2);
      $selectarray2 = mysqli_fetch_array($selectqueryfire2);
      $db_u_number = $selectarray2['_______'];
      }
      $db_u_naam = $selectarray2['_______'];
      ?>
  <tr>
    <td><?php echo $db_u_naam; ?></td>
    <td><?php echo $db_u_number; ?></td>
  </tr>
  
      <?php
      $id ++;
      $numofrow --;
    }
  ?>
  </tbody>
</table>
</div>
<div class="my-3 text-center">
<footer>
<h3> <a href="https://mycollagepage.000webhostapp.com/">mycollagepage.com</a></h3>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
