<!-- Wap to find the middle number among 3 -->
<?php
$a = 1;
$b = 4;
$c = 2;

if(($a<$b and $b<$c) or ($c<$b and $b<$a))
{
    echo "Middle number is $b";
}
elseif(($b<$a and $a<$c) or ($c<$a and $a<$b))
{
    echo "Middle number is $a";
}
else
{
    echo "Middle number is $c";
}
?>