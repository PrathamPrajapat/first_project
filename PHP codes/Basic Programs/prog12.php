<!-- wap to print the series -->
<?php
$a = 1;
$n = 5;
$fact = 1;
$sum = 0;

while ($a<=$n)
{
    $fact = $fact*$a;
    $a++;
    $sum = $sum + $fact;
}
echo "Sum of Factorial is = ".$sum. "<br>";
?>