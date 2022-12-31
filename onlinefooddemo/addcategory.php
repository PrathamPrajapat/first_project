<!-- Category Insertion Form -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Category Entry Form</title>
  </head>
  <body id="body-home">
    <div class="black-fill">
    <?php
    require './connection.php';
    include './adminmenu.php';
    ?>
    <br>
    <br>
    <!-- Category Entry Form -->
    <div class="container" class="categoryform">
    <form method="post">
  <div class="form-group">
    <h3>Category Entry Form</h3>
    <label for="ctgnm">Enter Category Name</label>
    <input type="text" class="form-control" id="ctgnm" name="ctgnm">
  </div>
  <button type="submit" class="btn btn-primary" name="save">Add Category</button>
</form>
</div>
<?php
if(isset($_REQUEST["save"]))
{
  extract($_REQUEST);
  // for duplicate checking of category.
  $s = "select * from categoryname where ctgnm = '$ctgnm'";
  $rs = mysqli_query($connect, $s);
  $n = mysqli_num_rows($rs);

  if($n>0)
  {
    die("<scrip>alert('Record Already Exist')</script>");
  }
  // ---------------------------------------------
  // Insert data into Category
  $queryinsert = "insert into categoryname(ctgnm) values('$ctgnm')";

  mysqli_query($connect, $queryinsert);
  $n = mysqli_affected_rows($connect);

  if($n>0)
  {
    echo "<scrip>alert('Record Saved')</script>";
  }
  else
  {
    echo "<scrip>alert('Record Not Save')</script>";
  }

}

?>
<br>
<br>
<br>
    <?php
    include './footer.php';
    ?>
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