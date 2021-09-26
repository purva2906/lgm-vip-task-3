<?php
include_once 'database.php';
$result=mysqli_query($conn,"select * from studentresult");
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body style="">
<section>
<nav class="navbar navbar-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="images/1.png" alt="" width="15%" ><!-- height="24" -->
    </a>
    <button type="button" class="btn btn-outline-light" onclick="location.href='login.php'">Logout</button>
  </div>
</nav>  
<br><br><br>
</section>
<section>

<div class="main">
  <h1 class="heading2">Student Results</h1>


</div>
</form>
</div>
<br>
<div class="container">
  <?php
if (mysqli_num_rows($result)>0) {
//   # code...
// }
  ?>
  <table class="table table-hover">
  <thead>

    <tr>
      <th scope="col">Seat No.</th>
      <th scope="col">Student Name</th>
      <th scope="col">Mother's name</th>
      <th scope="col">Maths</th>
      <th scope="col">English</th>
      <th scope="col">Physics</th>
      <th scope="col">Chemistry</th>
      <th scope="col">IT</th>
      <th scope="col">EVS</th>
      <th scope="col">%</th>
      <th scope="col">Result</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Add</th>
    </tr>
  </thead>
            <?php
      $i=0;
      while ($row=mysqli_fetch_array($result)) {
        # code...
      ?>
  <tbody>
    <tr>
      <!-- <th scope="row">1</th> -->
     <td><?php echo $row["seat_no"];?></td>
     <td><?php echo $row["name"];?></td>
      <td><?php echo $row["mothers_name"];?></td>
      <td><?php echo $row["mathematics"];?></td>
      <td><?php echo $row["english"];?></td>
      <td><?php echo $row["physics"];?></td>
      <td><?php echo $row["chemistry"];?></td>
      <td><?php echo $row["IT"];?></td>
      <td><?php echo $row["EVS"];?></td>
      <td><?php echo $row["percentage"];?></td>
      <td><?php echo $row["result"];?></td>
      <td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
  <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
</svg></a></td>
      <td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a></td>
<td><a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
</svg></a></td>
    </tr>

  </tbody>
  <?php
        $i++;
        }
        ?>
</table>
    <?php
    }
    else{
      echo "no result found";
    }
    ?>

</div>
</section>

<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>