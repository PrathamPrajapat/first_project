<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Registration Page</title>
  </head>
  <body id="body-home">
    <?php
    include './navbar.php';
    ?>
    <br>
    <div class="container" id="registrationform">
    <form method="post">
        <h3>Register Here!</h3>
  <div class="form-group mt-5">
    <label for="fnm">Full Name</label>
    <input type="text" class="form-control" id="fnm" name="fnm" placeholder="Enter Your Full Name" required>
  </div>
  <div class="form-group">
    <label for="mno">Mobile Number</label>
    <input type="text" class="form-control" id="mno" name="mno" placeholder="Enter Your 10 Digit Mobile Number" required>
  </div>
  <div class="form-group">
    <label for="emailid">Email Id</label>
    <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Enter Your Email Id" required>
  </div>
  <div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Address Here" required>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary" name="create">Create Account</button><br><br>
</form>
<?php
require './connection.php';
if (isset($_REQUEST["create"])) 
{
    extract($_REQUEST);
    $role = "customer";

    // for duplicate checking
    $s = "select emailid from data where emailid = '$emailid'";
    $rs = mysqli_query($connect, $s);
    $n = mysqli_num_rows($rs);

    if($n>0)
    {
        die("<script>alert('Record Already Exist')</script>");
    }

    $query = "insert into data value ('$fnm',$mno,'$emailid','$address','$password','$role')";

    mysqli_query($connect, $query);

    $n = mysqli_affected_rows($connect);

    if ($n > 0)
    {
        echo "<script>alert('Registration Successfull')</script>";
    }
    else
    {
        echo "<script>alert('Try Again')</script>";
    }
}
?>
    </div>
    <?php
    include './footer.php';
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>