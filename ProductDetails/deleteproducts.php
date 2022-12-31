<?php
require './connection.php';
$pid = $_REQUEST["pid"];
$delete = "delete from product where pid = '$pid'";
$rs = mysqli_query($connect, $delete);
$n = mysqli_affected_rows($connect);

if($n>0)
{
    echo "<script>alert('Data Deleted Successfully')</script>";
}
else
{
    echo "<script>alert('Try Again')</script>";
}
?>

