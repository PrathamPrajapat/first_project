<!-- wap to show sum and average of 10 element array -->

<?php
$a = array(1,2,3,4,5,6,7,8,9,10);
$res = 0;
{
    for($i=0;$i<=count($a);$i++)
    {
        $res = $res+$a[$i];
    }
    $avg = $res/count($a);
}
echo " Sum of the array is = ".$res."<br>";
echo " Average of the array is = ".$avg. "<br>";

?>