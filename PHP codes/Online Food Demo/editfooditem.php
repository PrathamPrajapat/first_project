<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body id="body-home">
    <div class="black-fill">
    <?php
    require './connection.php';
    include './navbar.php';
    ?>
    <br>
    <br>
<?php
$srno = $_REQUEST["srno"];

$s = "select b.ctgnm,a.foodcode,a.foodname,a.price,
a.shortdesc,a.foodtype,a.detail,a.foodimg,a.srno
from fooditem as a
inner join categoryname as b on a.ctgid=b.ctgid
where a.srno=$srno
order by b.ctgnm,a.foodname";

$rs = mysqli_query($connect, $s);
$a = mysqli_fetch_array($rs);

?>
<div class="container">
<form method="post">

<div class="form-group">
    <label for="fnm">Category Name</label>
    <span><?php echo $a[0];?></span>
  </div>

<div class="form-group">
    <label for="foodcode">Food Code</label>
    <input type="text" class="form-control" id="foodcode" name="foodcode" value="<?php echo $a[1];?>" readonly>
  </div>
  
  <div class="form-group">
    <label for="foodname">Enter Food Name</label>
    <input type="text" class="form-control" id="foodname" name="foodname" value="<?php echo $a[2];?>" required >
  </div>
  
  <div class="form-group">
    <label for="price">Enter Food Price</label>
    <input type="text" class="form-control" id="price" name="price" value="<?php echo $a[3];?>" required>
  </div>

  <div class="form-group">
    <label for="shortdesc">Enter Short Description</label>
    <input type="text" class="form-control" id="shortdesc" name="shortdesc" value="<?php echo $a[4];?>" required>
  </div>

  <div class="form-group">
  <div class="form-check">
  <label class="form-check-label" for="foodtype" readonly>Food Type - </label>
    <span><?php echo $a[5];?></span>
  </div>
</div>
  
  <div class="form-group">
    <label for="detail">Enter Detailed Description</label>
    <input type="text" class="form-control" id="detail" name="detail" value="<?php echo $a[6];?>" required>
  </div>
  
  <!-- <div class="form-group">
    <label for="foodimg">Upload Food Image</label>
    <input type="file" class="form-control" id="foodimg" name="foodimg">
  </div> -->

  <button type="submit" class="btn btn-primary" name="edit">Update Details</button>
</div>
</div>
</form>
</div>
<?php
require './connection.php';
if(isset($_REQUEST['edit']))
{
    extract($_REQUEST);

    $str1 = "update fooditem set foodname = '$foodname', price = $price, shortdesc = '$shortdesc', detail = '$detail' where srno = $srno";

    mysqli_query($connect, $str1);
    $t = mysqli_affected_rows($connect);
    if($t>0)
    {
        header('location:adminfoodlist.php');
    }
    else
    {
        echo "Try Again";
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