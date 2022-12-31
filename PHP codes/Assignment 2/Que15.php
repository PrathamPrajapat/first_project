<!-- To split the following string -->
<?php
$str1= '082307';
$newstr = substr(chunk_split($str1, 2, ':'),0,-1);
echo "$newstr";
?>