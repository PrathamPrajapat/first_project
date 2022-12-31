<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>
  <h5 align="right" style ="margin-right"><a href="login.php">Login Page</a></h5>
    <h1 align="center">Welcome to Student Management System</h1>
    <br>
    <br>

   <div class="container">
   <form action="index.php" method="post">
  <div class="form-group">
    <h4>Student Information</h4>
    <label for="standard">Standard</label>
    <select class="form-control" name="standard" id="standard">
        <option value="0">Select Standard</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
    </select>
  </div>
  <div class="form-group">
    <label for="rollno">Enter Roll Number</label>
    <input type="text" class="form-control" id="rollno" name="rollno">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit" value="showdata">Show Data</button>
</form>
</div>
<?php
if(isset($_REQUEST['submit']))
{
  $standard = $_POST['standard'];
  $rollno = $_POST['rollno'];
  include './dbconnection.php';
  $qry = "select * from student where standard = '$standard'and rollno = '$rollno'";
  $run = mysqli_query($connect,$qry); 
  $n = mysqli_num_rows($run);

  if($n>0)
  {
      $data = mysqli_fetch_assoc($run);
      ?>
  <table class="table">
  <thead>
  <tr>
    <th scope="colspan-5">Student Details</th>
  </tr>
</thead>
  <thead>
  <tr>
  <th scope="col">Image</th>
    <th scope="col">Roll No</th>
    <th scope="col">Name</th>
    <th scope="col">City</th>
    <th scope="col">Parents Contact</th>
    <th scope="col">Standard</th>
  </tr>
</thead>
<tbody>
  <tr>
  <td scope="rowspan - 5"><img src="uploads/<?php echo $data['image'];?>" style="max-width: 120px; max-height:150px;"></td>
    <td><?php echo $data['rollno'];?></td>
    <td><?php echo $data['name'];?></td>
    <td><?php echo $data['city'];?></td>
    <td><?php echo $data['pcontact'];?></td>
    <td><?php echo $data['standard'];?></td>
  </tr>
</tbody>
</table>
      <?php
  }
  else
  {
      echo "<script>alert('No Student Found')</script>";
  }
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