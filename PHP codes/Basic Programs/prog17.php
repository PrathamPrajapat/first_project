<!-- call by value -->
<?php
$a = 10;
$b = 20;
echo "a = ".$a. "b = ".$b. "<br>";
function f1($x,$y)
{
    $x--;
    $y+=5;
    echo "X = ".$x. " Y = ".$y. "<br>";
}
f1($a,$b);
echo "A = ".$a. "B = ".$b. "<br>";
?>

<!-- Call by reference -->
<?php
$a = 10;
$b = 20;
echo "a = ".$a. "b = ".$b. "<br>";
function f2(&$x,&$y)
{
    $x--;
    $y+=5;
    echo "X = ".$x. " Y = ".$y. "<br>";
}
f2($a,$b);
echo "A = ".$a. "B = ".$b. "<br>";
?>
