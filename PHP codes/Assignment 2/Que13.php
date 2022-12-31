<!-- wap to calculate 5 product price stored in jagged array -->

<?php
$product = array(
    array("Product Code" => 1, "Name" => 'Ice Cream', "Qty" => 2, "Price" => 20),
    array("Product Code" => 2, "Name" => 'Chocolate', "Qty" => 5, "Price" => 10),
    array("Product Code" => 3, "Name" => 'Chips', "Qty" => 10, "Price" => 10),
    array("Product Code" => 4, "Name" => 'Cold-Drinks', "Qty" => 5, "Price" => 40),
    array("Product Code" => 5, "Name" => 'Biscuits', "Qty" => 10, "Price" => 5)
);
foreach($product as $p)
{
    $total = $p["Qty"] * $p["Price"];
    echo "Total Price of " .$p["Name"]." is ". $total . "<br>";
}
?>