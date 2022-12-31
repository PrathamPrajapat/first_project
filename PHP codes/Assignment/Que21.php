<!-- wap to check given no is palindrome no using function with passing argument. -->
<?php
function palindrome($num)
{
$temp = $num;
$rev = 0;
{
    $rem = $num%10;
    $rev = ($rev*10)+$rem;
    $num = (int)($num/10);
}
if($temp==$rev)
    echo "Number is Pallindrome";
else
    echo "Number is not pallindorme";
}
palindrome(121);
?>