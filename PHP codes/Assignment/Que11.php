<!-- Wap to find out the division of student -->
<?php
$m = 90;
$h = 80;
$e = 50;
$s = 45;
$ss = 65;

$total = $m + $h + $e + $s + $ss;
$per = ($total/500)*100;

if($per>=60)
{
    echo "Student get First Division";
}
elseif($per>=45 and $per<60)
{
    echo "Student Get Second Division";
}
elseif($per>=33 and $per<45)
{
    echo "Student Get Third Division";
}
else
{
    echo "Student Get Fail.";
}
?>