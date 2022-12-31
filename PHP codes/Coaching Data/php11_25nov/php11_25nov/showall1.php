<?php
//step1 establish connection
$con= mysqli_connect("localhost","root","",
        "batch11db");

if(!$con)
{
    die("connection failed");
}

//step2 write select query
$s="select * from student";

//step 3 for execute query
$result= mysqli_query($con, $s);
//step 4 check no. of rows
$n= mysqli_num_rows($result);
if($n>0)
{
    while($a= mysqli_fetch_array($result))
    {
    echo "<pre>";
    print_r($a);
    }
}
else
{    echo "record not found";}
?>

