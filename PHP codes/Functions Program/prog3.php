<!-- Function Proram -->
<?php
function palindrome($num)
{
$rev = 0;
$temp = $num;
while($num>0)
{
    $rem = $num%10;
    $rev = ($rev*10)+$rem;
    $num = (int)($num/10);
}
if($temp == $rev)
{
    echo "Number is Palindrome";
}
else
{
    echo "Number is not a palindrome";
}
}
palindrome(121);
?>