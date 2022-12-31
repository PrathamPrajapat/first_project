<!-- Wap to check palindrome number using function with passing argument -->
<?php
function palindrome($num)
{
    $rev=0;
    $temp = $num;
    {
        while($num>0)
        {
            $rem = $num%10;
            $rev = ($rev*10)+$rem;
            $num = (int)($num/10);
        }
        if($temp == $rev)
        {
            echo " Number is Palindrome ";
        }
        else 
        {
            echo " Number is not a Palindrome";
        }
    }
}
palindrome(122);
?>
