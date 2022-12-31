<!-- wap to print the series betweeen 1 to n and find its average. -->
<?php
$a = 1;
$n = 10;
$sum = 0;

while ($a<=$n)
{
    $sum = $sum + $a;
    $a++;
    $avg = $sum/$n;
}
echo "Sum of Series = ".$sum. "<br>";
echo "Avg of Series = ".$avg. "<br>";
?>