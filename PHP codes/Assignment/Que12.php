<!-- wap to calculate total and net salary -->
<?php
$bs = 70000;

if($bs>35000)
{
    $hra = $bs*0.5;
    $ca = $bs*0.2;
    $pf = $bs*0.078;
}
elseif($bs>20000 and $bs<=35000)
{
    $hra = $bs*0.3;
    $ca = $bs*0.125;
    $pf = $bs*0.078;
}
elseif($bs>12500 and $bs<=20000)
{
    $hra = $bs*0.175;
    $ca = $bs*0.085;
    $pf = $bs*0.078;
}
elseif($bs>5000 and $bs<=12500)
{
    $hra = $bs*0.075;
    $ca = 0;
    $pf = $bs*0.078;
}
$total = $bs + $hra + $ca;
$netsalary = $total - $pf;

echo " Total Salary = ".$total. "<br>";
echo " Net Salary =".$netsalary. "<br>";

?>