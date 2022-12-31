<!-- Program to check max between  number with return type and no argument list -->

<?php
function maximum()
{
    $a = 8;
    $b = 6;

    if($a>$b)
    {
        return($a);
    }
    else
    {
        return($b);
    }
}
$greatest = maximum();
echo "max number is ". $greatest;
?>