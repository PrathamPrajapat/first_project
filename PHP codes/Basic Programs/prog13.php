<!-- wap to print a series -->
<?php
$a = 1;
$n = 5;
$sum = 0;

while($a<=$n)
{
    $sum = $sum + (1/$a);
    $a++;
}
echo " Sum of series is = ".$sum. "<br>";
?>