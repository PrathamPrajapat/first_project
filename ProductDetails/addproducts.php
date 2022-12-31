<div class="container">
      <div id="heading" class="mt-3" class="text-center">
          <h2>Product Entry Form</h2>
      </div>
      <div id="entryform">
          
              <form>
  <div class="form-group mt-3">
    <label for="pid">Product Id</label>
    <input type="text" class="form-control" id="pid" name="pid">
  </div>
  <div class="form-group">
    <label for="pnm">Product Name</label>
    <input type="text" class="form-control" id="pnm" name="pnm">
  </div>          
  <div class="form-group">
    <label for="qty">Product Quantity</label>
    <input type="text" class="form-control" id="qty" name="qty">
  </div>          
  <div class="form-group">
    <label for="prc">Product Price</label>
    <input type="text" class="form-control" id="prc" name="prc">
  </div>
  <button type="submit" name="submit"class="btn btn-primary">Submit</button>
</form>
          </div> 
      </div>
  <?php
  require './connection.php';
  if(isset($_REQUEST["submit"]))
  {
      extract($_REQUEST);
//      Duplicacy Checking
      $dup = "select * from product where pid = '$pid'";
      $res = mysqli_query($connect, $dup);
      $n = mysqli_num_rows($res);
      
      if($n>0)
      {
          die("<script>alert('Record Already Saved')</script>");
      }
//      Data Insertion Query
      $ins = "insert into product values($pid,'$pnm',$qty,$prc)";
      mysqli_query($connect, $ins);
      $n = mysqli_affected_rows($connect);
      
      if($n>0)
      {    
          echo "<script>alert('Data Inserted Successfully')</script>";
      }
      else
      {
        echo "<script>alert('Try Again')</script>";
      }
  }
  ?>
