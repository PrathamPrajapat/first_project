<!-- fucntions -->
<?php
function processmarks($marksArr)
{
$sum = 0;
foreach($marksArr as $value)
{
    $sum = $sum + $value;
}
return $sum;
}
function avgmarks($marksArr)
{
    $sum = 0;
    $i = 1;
    foreach($marksArr as $value)
    {
        $sum = $sum + $value;
        $i++;
    }
    return $sum/$i;
}
$marks = [70, 80, 60, 70, 50];
$summarks = processmarks($marks);

echo "Total Marks of Student out of 500 is = ".$summarks. "<br>";
?>
