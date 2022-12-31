<!-- Food Item Insertion Form -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Food Items Entry Form</title>
  </head>
  <body id="body-home">
    <div class="black-fill">
    <?php
    require './connection.php';
    include './adminmenu.php';
    ?>
    <br>
    <br>
    <!-- Food Item Entry Form -->
    <div class="container">
    <form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <h3>Food Item Entry Form</h3>
    <label for="ctgnm">Enter Category Name</label>
    <select name="ctgid">
    <option value="0">Select Category</option>
    <?php
    $s = "select * from categoryname order by ctgnm";
    echo $s;
    $rs = mysqli_query($connect, $s);
    while($a = mysqli_fetch_array($rs))
    {
        ?>
        <option value="<?php echo $a[0];?>"><?php echo $a[1];?></option>
        <?php
    }
    ?>
    </select>
  </div>
  <div class="form-group">
    <label for="foodcode">Enter Food Code</label>
    <input type="text" class="form-control" id="foodcode" name="foodcode" required>
  </div>
  
  <div class="form-group">
    <label for="foodname">Enter Food Name</label>
    <input type="text" class="form-control" id="foodname" name="foodname" required>
  </div>
  
  <div class="form-group">
    <label for="price">Enter Food Price</label>
    <input type="text" class="form-control" id="price" name="price" required>
  </div>

  <div class="form-group">
    <label for="shortdesc">Enter Short Description</label>
    <input type="text" class="form-control" id="shortdesc" name="shortdesc" required>
  </div>

  <div class="form-group">
    <label for="foodtype">Enter Food Type</label>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="foodtype" id="foodtype" value="veg">
  <label class="form-check-label" for="foodtype">
    Veg
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="foodtype" id="foodtype" value="nonveg">
  <label class="form-check-label" for="foodtype">
    Non-Veg
  </label>
</div>
</div>
  
  <div class="form-group">
    <label for="detail">Enter Detailed Description</label>
    <input type="text" class="form-control" id="detail" name="detail" required>
  </div>
  
  <div class="form-group">
    <label for="foodimg">Upload Food Image</label>
    <input type="file" class="form-control" id="foodimg" name="foodimg">
  </div>

  <button type="submit" class="btn btn-primary" name="save">Add Food Item</button>
</div>
</div>
</form>
<?php
if(isset($_REQUEST["save"]))
{
    /** @var type $_REQUEST */
    extract($_REQUEST);
    // Code for file uploading
    $nm = $_FILES["foodimg"]["name"];
    $source = $_FILES["foodimg"]["tmp_name"];

    $x = explode(".", $nm);
    $filename = time() . "." . $x[1];
    $destination="uploads/.".$filename;
    move_uploaded_file($source,$destination);

    $str="select IFNULL(max(srno),0)+1 as srno from fooditem";
    $rs=mysqli_query($connect, $str);
    $x= mysqli_fetch_array($rs);
    $maxsrno=$x[0];

    $query = "insert into fooditem values($ctgid,'$foodcode','$foodname',$price,'$shortdesc','$foodtype','$detail','$destination',$maxsrno)";

    mysqli_query($connect, $query);
    $n = mysqli_affected_rows($connect);

    if($n>0)
    {
        echo "<script>alert('Record Saved')</script>";
    }
    else
    {
        echo "<script>alert('Record Not Saved')</script>";
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