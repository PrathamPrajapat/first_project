<!-- Wap to check entered year is a leap year or not  -->
<?php
$year = 1900;

if($year%400==0)
{
    echo "Year is a Leap Year";
}
else if($year % 100 == 0)
{
    echo "Year is not a leap year";
}
else if($year % 4 ==0)
{
    echo "Year is a leap year";
}
else
{
    echo "Year is not a leap year";
}
?>