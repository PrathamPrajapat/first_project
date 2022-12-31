<!-- Wap to check max number between 2 no with return type and no arguments list -->
<?php
function maxnumber()
{
    $a = 5;
    $b = 6;
    if($a>$b)
    {
        return $a;
    }
    else
    {
        return $b;
    }
}
$max = maxnumber();
echo "Max number is ".$max."<br>";
?>