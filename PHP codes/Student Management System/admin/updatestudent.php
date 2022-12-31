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

    <title>Update Student Details</title>
  </head>
  <body>
    <div class="container">
    <form action="updatestudent.php" method="post">
  <div class="form-group">
    <label for="standard">Enter Standard</label>
    <input type="number" class="form-control" id="standard" name="standard" Required>
  </div>
  <div class="form-group">
    <label for="name">Enter Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
    <br>
    <br>
    <!--  -->
    <div class="container">
    <table class="table">
    <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Roll No</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>


<?php
include('../dbconnection.php');
if(isset($_REQUEST["submit"]))
{
  extract($_REQUEST);
  $s = "select * from student where standard = '$standard' and name LIKE '%$name%'";
    $run = mysqli_query($connect,$s);
    $n = mysqli_num_rows($run);
    if($n>0)
    {
        while($data = mysqli_fetch_assoc($run))
        {
            $count++;
            ?>
  <tbody>
    <tr>
      <td><?php echo $count;?></td>
      <td><img src="../uploads/<?php echo $data['image']?>" style="max-width:100px;"></td>
      <td><?php echo $data['name']?></td>
      <td><?php echo $data['rollno']?></td>
      <td><a href="updateform.php?sid=<?php echo $data['id'] ?>">Edit</a></td>
    </tr>
  </tbody>
            <?php
        }
    }
    else
    {
        echo "Record Not Found";
    }
}
?>
</table>
</div>

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