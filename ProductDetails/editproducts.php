<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Edit Page</title>
  </head>
  <body>
    <?php
require './connection.php';
$pid = $_REQUEST["pid"];
$query = "select * from product where pid = '$pid'";
$rs = mysqli_query($connect,$query);

$a = mysqli_fetch_array($rs);
?>
<div class="container">
      <div id="heading" class="mt-3" class="text-center">
          <h2>Product Entry Form</h2>
      </div>
      <div id="entryform">
          
              <form>
  <div class="form-group mt-3">
    <label for="pid">Product Id</label>
    <input type="text" class="form-control" id="pid" name="pid" value="<?php echo $a[0]?>" readonly>
  </div>
  <div class="form-group">
    <label for="pnm">Product Name</label>
    <input type="text" class="form-control" id="pnm" name="pnm" value="<?php echo $a[1]?>" readonly>
  </div>          
  <div class="form-group">
    <label for="qty">Product Quantity</label>
    <input type="text" class="form-control" id="qty" name="qty" value="<?php echo $a[2]?>">
  </div>          
  <div class="form-group">
    <label for="prc">Product Price</label>
    <input type="text" class="form-control" id="prc" name="prc" value="<?php echo $a[3]?>">
  </div>
  <button type="submit" name="edit"class="btn btn-primary">Update</button>
</form>
          </div> 
</div>
      
<?php
if(isset($_REQUEST["edit"]))
{
    extract($_REQUEST);
    $update = "update product set qty = '$qty', prc = '$prc' where pid='$pid'";
    $rs = mysqli_query($connect,$update);
    $n = mysqli_affected_rows($connect);
    
    if($n>0)
    
    {
        echo "<script>alert('Data Updated Successfully')</script>";
    }
    else
    {
        echo "<script>alert('Not Updated')</script>";
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
