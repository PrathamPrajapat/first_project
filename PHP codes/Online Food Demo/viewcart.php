<form action="post">
<table border="1" align="center">
    <tr>
        <th>Food Code</th>
        <th>Food Name</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Total Price</th>
    </tr>
    <tr>

<?php
session_start();
if(isset($_SESSION["cart_item"]))
{
 foreach ($_SESSION["cart_item"] as $item)
 {
     ?>
    <tr>
        <td><?php echo $item["foodcode"]; ?></td>
        <td><?php echo $item["foodname"]; ?></td>
        <td><?php echo $item["quantity"]; ?></td>
        <td><?php echo $item["price"]; ?></td>
        <td><?php echo $item["quantity"]*$item["price"]; ?></td>
        
    </tr>
    <?php
}   
 }
$t = 0;
 ?>
    </table>
    </form>
<!-- For insert record in order table -->
<?php
/*
if(isset($_REQUEST["placeorder"]))
{
    require './Connection.php';
    
    //1. to calculate order no.
$s1="select IFNULL(max(orderno),0)+1 as orderno "
        . " from mstorder";
$rs1=  mysqli_query($link, $s1);
$a=  mysqli_fetch_assoc($rs1);
$orderno=$a["orderno"];

//2. for calculate order total
 if(isset($_SESSION["cart_item"]))
{
 foreach ($_SESSION["cart_item"] as $item)
 {
     $t+=$item["quantity"]*$item["price"];   
 }
}
 
if(isset($_REQUEST["remark"]))
{
  $remark=$_REQUEST["remark"];
}
 else 
{
    $remark="none";
}

$orderdate=date("Y/m/d h:i:s");
$emailid=$_SESSION["emailid"];

//3.Insert record in a mstorder table
$s2="insert into mstorder(orderno,orderdate,emailid,"
 . "ordertotal,remark) "
. "values($orderno,'$orderdate','$emailid',$t"
  . ",'$remark')";

//echo $s2;
//die();
mysqli_query($link, $s2);


//4 insert record in trnorder 

if(isset($_SESSION["cart_item"]))
{
 foreach ($_SESSION["cart_item"] as $item)
 {
     $foodcode=$item["foodcode"];
     $qty=$item["quantity"];
     $unitcost=$item["price"];
     
     $s3="insert into trnorder values($orderno,"
   . "'$foodcode',$qty,$unitcost)";
     
    mysqli_query($link, $s3);
    
 }
} 
 
//5 for affected rows
$m=  mysqli_affected_rows($link);
if($m>0)
{
    echo "<script>alert('Order Successfull');</script>";
    //call sms code
    $mno=$_SESSION["mno"];
    $ch = curl_init();
$user="batchphp0@gmail.com:India123#";
$receipientno=$mno;
$senderID="TEST SMS";
$msgtxt="order successfull";
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo "sms send"; }
curl_close($ch);
    
}
else
{
    echo "try again";
    
}

}
?>

    
<form method="post">
    <input type="submit" value="Empty Cart" name="b2">
</form>
<?php

if(isset($_REQUEST["b2"]))
{
if(isset($_SESSION["cart_item"]))
{
    $cart=$_SESSION["cart_item"];
    unset($cart);
    header('location:index.php');
}
}
 */
 
?>







