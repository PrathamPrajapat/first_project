<!-- Function 1 -->
<?php
function middlenumber()
{
    $a = 7;
    $b = 9;
    $c = 8;
    {
        if($a<$b && $b<$c)
        {
            echo "$b"." middle number";
        }
        elseif($a>$b and $a<$c)
        {
            echo "$a"." middle number";
        }
        else
        {
            echo "$c"." middle number";
        }
    }
}
middlenumber();
?>