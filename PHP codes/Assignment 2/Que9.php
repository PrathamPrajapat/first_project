<!-- wap to swapping of key and value in associative array -->
<?php
$array1 = array(1 => "a", "b" => 2, "c" => 3);
$flipped = array_flip($array1);

echo "<pre>";
print_r($flipped);
?>