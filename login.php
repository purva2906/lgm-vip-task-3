<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body  style="">


<section>
<nav class="navbar navbar-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="images/1.png" alt="" width="15%" ><!-- height="24" -->
    </a>
    
  <!-- </div><button type="button" class="btn btn-outline-light" onclick="window.location.href = 'login.php';">Admin</button> -->
</nav> 
<br><br><br>  
  
<div class="main">
  
  <div class="login">
<?php   
include_once 'database.php';
if(isset($_POST['loginbutton']))
{
$username1 = $_POST['entered_un'];
$password1 =$_POST['entered_pass'];
$action = '';
$result= mysqli_query($conn,"select username,password from adminlogin where username='$username1' and password='$password1'");
// $count=count(array($result));
$row = mysqli_fetch_array($result);

$total = $row[0];
if($total>0)
{
$action='admin.php';
}
else 
{
// or not
  echo '<script>alert("Incorrect admin credentials")</script>';

}
} 
?>
  <form method="POST" action="<?php echo "$action";?>">
    <h1 class="heading1"> Login</h1>
  <div class="form-row">
    <div class="col-md-4 mb-3 form-group">
      <label for="validationDefault01" class="label1">Username</label>
      <input type="text" name="entered_un" class="form-control" id="validationDefault01" placeholder=""  required style="width: 200%">
    </div>
    <div class="col-md-4 mb-3 form-group">
      <label for="validationDefault02"class="label1">Password</label>
      <input type="text" name="entered_pass" class="form-control" id="validationDefault02" placeholder=""  required style="width: 200%">
    </div>
 
  <div class="form-group form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2"class="label1">
        Remember me
      </label>

    </div>
  </div>
  <button type="button" class="btn btn-outline-light" onclick="location.href='index.php'">Login</button>
  
</div>
</form>

</div>
</section>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>