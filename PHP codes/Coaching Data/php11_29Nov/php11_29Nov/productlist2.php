<?php
require './connection.php';
$s="select * from product";

$result=mysqli_query($con, $s);
$n= mysqli_num_rows($result);
if($n>0)
{
    ?>
<table border="1" align="center">
    <tr>
        <th>product code</th>
        <th>product name</th>
        <th>product img</th>
    </tr>
<?php
    while($a= mysqli_fetch_array($result))
    {
    //echo "<pre>"; print_r($a);
        ?>
    <tr>
        <td><?php echo $a[0]; ?></td>
        <td><?php echo $a[1]; ?></td>
        <td><img src="<?php echo $a[3]; ?>"
height="80" width="100">
            <br>
           Price - <?php echo $a[2]; ?>
        </td>
    </tr>
    <?php
    }
}
else
    echo "record not found";
?>
</table>

