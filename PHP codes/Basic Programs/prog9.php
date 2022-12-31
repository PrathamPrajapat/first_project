<!-- Program to calculate the total and net salary -->
<?php
$bs = 33000;

if($bs>=45000)
{
$hra = ($bs*0.5);
$ca = ($bs*0.25);
$total = $bs + $hra + $ca;
$pf = ($bs*0.078);
$ns = $total - $pf;

echo " Total Salary =".$total. "<br>";
echo " Net Salary = ".$ns. "<br>";
}
if($bs<45000 and $bs>=30000)
{
$hra = ($bs*0.25);
$ca = ($bs*0.15);
$total = $bs + $hra + $ca;
$pf = ($bs*0.078);
$ns = $total - $pf;

echo " Total Salary =".$total. "<br>";
echo " Net Salary = ".$ns. "<br>";
}
if($bs<30000 and $bs>=20000)
{
$hra = ($bs*0.15);
$ca = ($bs*0.075);
$total = $bs + $hra + $ca;
$pf = ($bs*0.078);
$ns = $total - $pf;

echo " Total Salary =".$total. "<br>";
echo " Net Salary = ".$ns. "<br>";
}
if($bs<20000 and $bs>=5000)
{
$hra = ($bs*0);
$ca = ($bs*0);
$total = $bs + $hra + $ca;
$pf = ($bs*0.078);
$ns = $total - $pf;

echo " Total Salary =".$total. "<br>";
echo " Net Salary = ".$ns. "<br>";
}
?>