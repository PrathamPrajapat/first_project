<!-- wap to check the factorial of a number. -->
<?php
$a = 1;
$n = 5;
$fact = 1;

while ($a<=$n)
{
    $fact = $fact * $a;
    $a++;
}
echo "Factorial of a given number is = ".$fact."<br>";
?>