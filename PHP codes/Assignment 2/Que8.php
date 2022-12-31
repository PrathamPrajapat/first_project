<!-- wap to merge two array -->
<?php
$array1 = array("rno","name","city");
$array2 = array(1,"ram","indore");

$c = array_merge($array1,$array2);
echo "<pre>";
print_r($c);
?>