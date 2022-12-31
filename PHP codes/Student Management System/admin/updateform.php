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
include '../dbconnection.php';
include './titlehead.php';

$sid = $_REQUEST["sid"];
$sql = "SELECT * FROM `student` WHERE id = '$sid'";
$run = mysqli_query($connect,$sql);
$data = mysqli_fetch_assoc($run);
?>
<div class="container mt-4">
  <form method="post" enctype="multipart/form-data" action="updatedata.php">
  <div class="form-group">
    <label for="rollno">Roll No.</label>
    <input type="text" class="form-control" id="rollno" name="rollno" value=<?php echo $data['rollno']; ?>>
  </div>
  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" name="name" value=<?php echo $data['name']; ?>>
  </div>
  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" id="city" name="city" value=<?php echo $data['city']; ?>>
  </div>
  
  <div class="form-group">
    <label for="pcontact">Parents Contact No.</label>
    <input type="text" class="form-control" id="pcontact" name="pcontact" value=<?php echo $data['pcontact']; ?>>
  </div>
  
  <div class="form-group">
    <label for="standard">Standard</label>
    <input type="number" class="form-control" id="standard" name="standard" value=<?php echo $data['standard']; ?>>
  </div>
  <div class="form-group">
    <label for="image">Student Image</label>
    <input type="file" class="form-control" id="image" name="image">
  </div>
  
  <div class="form-group">
    <input type="hidden" class="form-control" name="sid" value=<?php echo $data['id'];?>>
  </div>
  <button type="submit" class="btn btn-primary" name="edit">Submit</button>
</form>
</div>
