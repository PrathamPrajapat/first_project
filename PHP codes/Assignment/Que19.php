<!-- wap to calculate middle number using function -->
<?php
function middlenumber($a,$b,$c)
{
    if(($a<$b && $b<$c) || ($b>$a && $b<$c))
    {
        echo $b." is the middle number";
    }
    elseif(($b<$a && $a<$c) || ($c<$a && $a<$b))
    {
        echo $a." is the middle number";
    }
    else
    {
      echo $c." is the middle number";
    }

}
middlenumber($a=13,$b=14,$c=12)
?>