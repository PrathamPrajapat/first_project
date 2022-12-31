<?php
require './chksession.php';

require './connection.php';
require './function.php';

//for fetch query string
$srno=$_REQUEST["srno"];

$sql="select a.srno,b.ctgnm,a.foodcode,a.foodname,
    a.price,a.foodimg,
a.shortdesc from fooditem as a
inner join categoryname as b on a.ctgid=b.ctgid 
where a.srno=$srno ";

//here we call function.php and pass query as an argument
$productByCode =runQuery($sql);

$itemArray = 
array($productByCode[0]["foodcode"]=>
array(
'foodname'=>$productByCode[0]["foodname"], 
'foodcode'=>$productByCode[0]["foodcode"], 
'quantity'=>1, 
'price'=>$productByCode[0]["price"], 
'foodimg'=>$productByCode[0]["foodimg"])
);

// echo "<pre>";
// print_r($itemArray);
// die();

if(empty($_SESSION["cart_item"]))
{
$_SESSION["cart_item"] = $itemArray;
}
else //when session is not empty
{
//when food code is already exists in session
 if(isset($_SESSION["cart_item"][$productByCode[0]["foodcode"]]) 
         && 
array_key_exists($productByCode[0]["foodcode"],$_SESSION["cart_item"]))
{
$quantity= $_SESSION["cart_item"][$productByCode[0]["foodcode"]]['quantity'];
$price= $_SESSION["cart_item"][$productByCode[0]["foodcode"]]['price'];
$itemArray = array($productByCode[0]["foodcode"]=>array(
  'foodname'=>$productByCode[0]["foodname"], 
  'foodcode'=>$productByCode[0]["foodcode"], 
  'quantity'=>($quantity+1), //qty increment by 1
 'price'=>$productByCode[0]["price"], 
 'foodimg'=>$productByCode[0]["foodimg"])
);
    
}
else //when new food code is added to list
{
$itemArray = array($productByCode[0]["foodcode"]=>
array('foodname'=>$productByCode[0]["foodname"], 
'foodcode'=>$productByCode[0]["foodcode"], 
'quantity'=>1, 
'price'=>$productByCode[0]["price"], 
'foodimg'=>$productByCode[0]["foodimg"])
);
}

}
$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);

// echo "<pre>";
// print_r($_SESSION);
echo "<pre>";
print_r($itemArray);

header('location:customerfoodlist.php?msg=Product added to cart');

 ?>
<script>alert('Product Added To Cart');</script>
<script>document.location='location:customerfoodlist.php';</script>

