<!-- Wap to reverse a three digit number -->
<?php
$num = 123;
$revnum = 0;

echo "Number Before Reverse = ".$num. "<br>";
while($num>0)
{
$rem = ($num%10);
$revnum = ($revnum*10) + $rem;
$num = (int)($num/10);
}
echo "Number After Reverse =".$revnum;
?>