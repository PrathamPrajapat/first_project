<?php
require './connection.php';
$s="select * from product";

$result=mysqli_query($con, $s);
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
    echo "record not found";
?>

