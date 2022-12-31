<!-- Array Librabry Functions -->
<!-- In Ascending Order sort by value -->
<?php
$name = array("Ram" => 31, "Amit" => 41, "Ananya" => 39, "Sumit" => 40);

asort($name);
echo "<pre>";
print_r($name);
?>

<!-- In Ascending Order sort by key -->
<?php
$name = array("Ram" => 31, "Amit" => 41, "Ananya" => 39, "Sumit" => 40);

ksort($name);
echo "<pre>";
print_r($name);
?>


<!-- In Descending Order sort by value -->
<?php
$name = array("Ram" => 31, "Amit" => 41, "Ananya" => 39, "Sumit" => 40);

arsort($name);
echo "<pre>";
print_r($name);
?>


<!-- In Descending Order sort by key -->
<?php
$name = array("Ram" => 31, "Amit" => 41, "Ananya" => 39, "Sumit" => 40);

krsort($name);
echo "<pre>";
print_r($name);
?>