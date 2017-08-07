<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id2472426_admin');
define('DB_PASSWORD', 'adminroot');
define('DB_DATABASE', 'id2472426_db');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$conn) {
    die("Connection failed: " .mysqli_connect_error());
}
if (isset($_POST['username'])) {
if ($_POST['username'] == "" || $_POST['password'] == "" ){
 echo "error: All fields are required";
    }
else if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `test` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql)or die("Records not found!");
$count=mysqli_num_rows($result);
    if ($count > 0){
        header("location: resume.php");
    }
 else {
        echo "No Records Found";
    }
}
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
<div class="login-page">
<div class="container">
  <form class="form-signin" action="" method="post">
  <div class="">
    <div class="row col-md-12">
      <img src="userfull.png" class="image-circle center-block">
    </div>
    <div class="row col-md-12">
      <h1> </h1>
      <input type="text" name="username" placeholder="Username" class="center-block">
      <h1> </h1>
      <input type="password" name="password" placeholder="Password" class="center-block">
      <h1> </h1>
      <button class="center-block button" type="submit">LOGIN</button>
    </div>
    </div>
  </form> 
</div>
</div>
</body>
</html>