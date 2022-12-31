<?php
ob_start();

//for fetch query string
$rno=$_GET["rno"];

//echo "roll no=".$rno;

//step1 establish connection
$con= mysqli_connect("localhost","root","",
        "batch11db");

if(!$con)
{
    die("connection failed");
}

$query="delete from student where rno=$rno";

//for execute query 
mysqli_query($con, $query);

$n=mysqli_affected_rows($con);
if($n>0)
    header('location:showall.php');

?>

