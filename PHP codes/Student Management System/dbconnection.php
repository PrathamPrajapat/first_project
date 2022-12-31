<?php
$connect = mysqli_connect("localhost", "root", "", "sms");
    if(!$connect)
    {
        die("Connection Failed");
    }
?>