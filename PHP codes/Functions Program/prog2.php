<!-- Function Program -->
<?php
function maximum()
{
    $a = 5;
    $b = 6;
    {
        if($a>$b)
        {
            return $a;
        }
        else
        {
            return $b;
        }
    }
}
$greater = maximum();
echo "Greater number is = ".$greater. "<br>";
?>