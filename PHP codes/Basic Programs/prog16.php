<?php
$a = 4;
echo "outside function a =".$a. "<br>";
f1();
function f1()
{
    global $b;
    $b = 5;
    echo "Inside function a = ".$GLOBALS["a"]. "<br>";
    echo "Inside Funtion b = ".$b. "<br>";
}
echo "Outside Function b = ".$b. "<br>";
?>