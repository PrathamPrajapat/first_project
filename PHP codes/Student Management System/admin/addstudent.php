<?php
session_start();

if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
    header('location:../login.php');
}
?>

<?php
   include './titlehead.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Add Student</title>
  </head>
  <body>
    <div class="container mt-4">
  <form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="rollno">Roll No.</label>
    <input type="text" class="form-control" id="rollno" name="rollno">
  </div>
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  
  <div class="form-group">
    <label for="pcontact">Parents Contact No.</label>
    <input type="text" class="form-control" id="pcontact" name="pcontact">
  </div>
  
  <div class="form-group">
    <label for="standard">Standard</label>
    <input type="number" class="form-control" id="standard" name="standard">
  </div>
  <div class="form-group">
    <label for="image">Student Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  <button type="submit" class="btn btn-primary" name="add">Submit</button>
</form>
</div>
<?php
include('../dbconnection.php');
if(isset($_REQUEST["add"]))
{
    extract($_REQUEST);
      // for duplicate checking
      $duplicate = "select * from student where rollno = '$rollno' and standard = '$standard'";
      $rs = mysqli_query($connect, $duplicate);
      $n = mysqli_num_rows($rs);
  
      if($n>0)
      {
          die("<scrip>alert('Record Already Exist')</script>");
      }
    // Image Uploading Code
    $nm = $_FILES["image"]["name"];
    $source = $_FILES["image"]["tmp_name"];

    $x = explode(".",$nm);
    $filename = time().".".$x[1];
    $destination = "../uploads/.".$filename;
    move_uploaded_file($source,$destination);
  
    // Data insertion Query.
    $add = "INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `pcontact`, `standard`, `image`) VALUES ('NULL',$rollno,'$name','$city','$pcontact',$standard,'$destination')";
    // Insertion Query Execution
    $run = mysqli_query($connect,$add);
    // Check Number of rows
    $n = mysqli_affected_rows($connect);
    if($n>0)
    {
        echo "<script>alert('Data Inserted Successfully')</script>";
    }
    else
        echo "<script>alert('Try Again')</script>";
}
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