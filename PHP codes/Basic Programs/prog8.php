<!-- Program of if else -->
<?php
$maths = 50;
$science = 45;
$hindi = 33;
$english = 33;
$social = 35;

$total = $maths+$science+$hindi+$english+$social;
$per = ($total/500)*100;

echo "Total =".$total. "<br>";
echo "Percentage =".$per. "<br>";


if($per>=60)
echo "Student Get First Division";

elseif($per<60 and $per>=45)
echo "Student Get Second Division";

elseif($per<45 and $per>=33)
echo "Student Get Third Division";

else
echo "Student Get Failed.";
?>