<!-- Program to check middle number  -->
<?php
function middle($a, $b, $c)
{
if( $b>$a && $a>$c || $c>$a && $a>$b )
{
echo ("$a is middle number");
}
//Checking for b is middle number or not
if( $a>$b && $b>$c || $c>$b && $b>$a )
{
echo("$b is middle number");
}
//Checking for c is middle number or not
if( $a>$c && $c>$b || $b>$c && $c>$a )
{
echo("$c is middle number");
}
}
middle(5,6,7);
?>