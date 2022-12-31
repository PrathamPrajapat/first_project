<!-- wap to print a even number and odd number -->
<?php
$i = 1;
$n = 50;

for($i=1;$i<=$n;$i++)
{
    if($i%2==0)
    {
        echo "Number is Even = ".$i."<br>";
    }
    else
    {
        echo "Number is Odd = ".$i."<br>";
    }
}
?>
