

<!-- user.php -->
<?php
include "connect.php";
if(isset($_POST['submit'])){
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $con_password=$_POST['pass_confirm'];

  $sql="insert into `user_info`(fname,lname,email,password) values('$fname','$lname','$email','$password')";
  $result=mysqli_query($conn,$sql);
  if(isset($result)){
    echo "record inserted";
  } else {
    die(mysqli_error($conn));
  }
}
?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">

    <title>crud</title>
  </head>
  <body>
    <div class="container my=10" >
      <form method="POST">
        <div class="form-group"></div>
        <!-- <label>Name</label><br> -->
        <input type="text" class="form-control" placeholder="First name" name="fname" autocomplete="off"><br>
        <input type="text" class="form-control" placeholder="Last name" name="lname" autocomplete="off"><br>

        <!-- <label>Email</label><br> -->
        <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off"><br>
        <!-- <label>Password</label><br> -->
        <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off"><br>
        <!-- <label> Confirm Password</label><br> -->
        <input type="password" class="form-control" placeholder="Confirm your password" name="pass_confirm" autocomplete="off"><br>

        <button type="submit"  class="btn btn-primary" name="submit">Submit</button> 
      </form>
    </div>
  </body>
</html>
