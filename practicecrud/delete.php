<?php
require './connection.php';
$eid = $_REQUEST["eid"];
$del = "delete from data where eid = '$eid'";
$rs = mysqli_query($connect, $del);
$n = mysqli_affected_rows($connect);
if($n>0)
{
    echo "Data Deleted Successfully";
}
 else {
 echo "Try Again";    
}
?>

