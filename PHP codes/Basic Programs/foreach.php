<!-- Foreach loop -->
<!-- For each loop only works on array and object and is used to loop through each key/value pair in an array. -->
<!-- Syntax -> foreach($variable as $value) -->

<?php
$noun = array("Pratham","Car","Indore","Pen");
foreach($noun as $value)
{
    echo "Value is =".$value."<br>";
}
?>

<?php
$age = array("Pratham" => "23","Piyush" => "24","Aashutosh" => "25");
foreach($age as $a => $value)
{
    echo "Age of ".$a." = ".$value."<br>";
}
?>