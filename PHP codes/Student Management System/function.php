<?php

function showdetails($standard, $rollno)
{
    include('./dbconnection.php');

    $qry = "SELECT * FROM `student` WHERE 'rollno' = '$rollno' and 'standard' = '$standard'";
    echo $qry;
    die();
    $run = mysqli_query($connect, $qry);
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