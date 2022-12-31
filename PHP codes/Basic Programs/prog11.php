<!-- Wap to factorial of program -->
<?php
$a = 1;
$n = 5;
$fact = 1;

while ( $a<=$n )
{
    $fact = $fact * $a;
    $a++;
}
echo " Factorial is = ".$fact. "<br>";
?>