<!-- Wap to check number is prime or not -->
<?php
$num = 7;
$count = 0;
for($i=1;$i<=$num;$i++)
{
if($num%$i==0)
{
    $count++;
}
}
if($count<3)
{
    echo "Number is Prime";
}
else
{
    echo "Number is not a Prime";
}
?>