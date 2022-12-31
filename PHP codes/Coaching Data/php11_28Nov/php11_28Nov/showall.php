<?php
//step1 establish connection
$con= mysqli_connect("localhost","root","",
        "batch11db");

if(!$con)
{
    die("connection failed");
}

//step2 write select query
$s="select * from student";

//step 3 for execute query
$result= mysqli_query($con, $s);
//step 4 check no. of rows
$n= mysqli_num_rows($result);
if($n>0)
{    
    ?>
<table border="1" align="center" bgcolor="aqua">
    <caption>Students List</caption>
    <tr>
        <th>roll no.</th>
        <th>name</th>
        <th>age</th>
        <th>option</th>
    </tr>    
    <?php
    while($a= mysqli_fetch_array($result))
    {
       ?>
    <tr>
        <td><?php echo $a[0]; ?></td>
        <td><?php echo $a[1]; ?></td>
        <td><?php echo $a[2]; ?></td>
        <td>
<a href="edit.php?rno=<?php echo $a[0]; ?>">Edit</a>
<a href="delete.php?rno=<?php echo $a[0]; ?>">Delete</a>
        </td>
    </tr>
    <?php
    }
}
else
{    echo "record not found";}
?>
</table> 
