<!-- Sorting of 10 array element in descending order -->
<?php
$a = array(1,2,3,4,5,6,7,8,9,10);
$n = count($a);
    for($i=0;$i<=$n;$i++)
    {
        for($j=0;$j<($n-$i-1);$j++)
        {
            if($a[$j]<$a[$j+1])
        {  
        $t = $a[$j];
        $a[$j] = $a[$j+1];
        $a[$j+1]=$t;
        }
    }
}
echo "After Sorting <br>";
echo "<pre>";
print_r($a);
?>