<!-- Wap to print the fibonacci series -->
<?php
$i = 0;
$a = -1;
$b = (1);

for($i=0;$i<=10;$i++)
{
    $c = $b + $a;
    echo "$c ";
    $a = $b;
    $b = $c;
}
?>