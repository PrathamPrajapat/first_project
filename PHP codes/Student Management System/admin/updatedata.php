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
    extract($_REQUEST);
    // Image Uploading Code
    $nm = $_FILES["image"]["name"];
    $source = $_FILES["image"]["tmp_name"];

    $x = explode(".", $nm);
    $filename = time() . "." . $x[1];
    $destination = "../uploads/." . $filename;
    move_uploaded_file($source, $destination);

    // Data insertion Query.
    $qry = "UPDATE `student` SET `rollno` = '$rollno', `name` = '$name', `city` = '$city', `standard` = '$standard', `image` = '$destination' WHERE `id` = '$sid'";    
    // Insertion Query Execution
    $run = mysqli_query($connect, $qry);
    $n = mysqli_affected_rows($connect);
    if ($n > 0) {
        echo "<script>alert('Data Updated Successfully')</script>";
    } else {
        echo "Try Again";
    }
?>