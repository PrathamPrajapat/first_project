<!-- Wap to find the greatest number among 3 numbers -->
<?php
$a = 15;
$b = 5;
$c = 9;

if($a>$b && $a>$c)
{
    echo "A is the greatest = ".$a. "<br>";
}
else if($b>$a and $b>$c)
{
    echo "B is the greatest = ".$b. "<br>";
}
else
{
    echo "C is the greatest = ".$c;
}
?>