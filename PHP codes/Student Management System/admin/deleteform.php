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
    $id = $_REQUEST['sid'];

    // Data insertion Query.
    $qry = "delete from student where id = $id";    
    // Insertion Query Execution
    $run = mysqli_query($connect, $qry);
    $n = mysqli_affected_rows($connect);
    if ($n > 0) {
        echo "<script>alert('Data Deleted Successfully')</script>";
    } else {
        echo "Try Again";
    }
?>

