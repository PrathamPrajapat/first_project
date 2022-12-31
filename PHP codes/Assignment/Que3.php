<!-- Wap to swap two variable without using third variable -->
<?php
$a = 12;
$b = 15;
echo "Number Before Swapping A = ".$a. " ,B = ".$b. "<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "Number After Swapping A = ".$a. " ,B = ".$b. "<br>";
?>