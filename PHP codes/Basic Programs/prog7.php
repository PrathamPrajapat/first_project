<!-- Swapping of number without using third variable -->
<?php
$a = 10;
$b = 15;

echo "Number before swapping = "."$a $b"."<br>";

$a = $a+$b;
$b = $a-$b;
$a = $a-$b;

echo "Number after swapping = "."$a $b"."<br>";
?>