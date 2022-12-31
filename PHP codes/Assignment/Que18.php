<!-- Wap to check the number is armstrong or not -->
<?php
$num = 121;
$res = 0;
$temp = $num;
while($num>0)
{
    $rem = $num%10;
    $res = $res+$rem*$rem*$rem;
    $num = $num/10;
}
if($res == $temp)
{
    echo "Number is an armstrong number";
}
else
{
    echo "Number is not an armstrong number";
}
?>