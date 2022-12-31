<?php
ob_start();

//for fetch query string
$rno=$_GET["rno"];
//echo "roll no=".$rno;

//step1 establish connection
$con= mysqli_connect("localhost","root","",
        "batch11db");

if(!$con)
{
    die("connection failed");
}

$s="select * from student where rno=$rno";
$rs= mysqli_query($con, $s);
$a= mysqli_fetch_array($rs);
//echo "<pre>"; print_r($a);
?>
<form method="post">
    <table border="1" align="center">
        <tr>
            <td>Roll No.*</td>
            <td>
<input type="text" name="rno"
       value="<?php echo $a[0]; ?>" readonly>
            </td>            
        </tr>
        <tr>
            <td>Name*</td>
            <td>
<input type="text" name="name"
       value="<?php echo $a[1]; ?>">
            </td>            
        </tr>
        <tr>
            <td>Age*</td>
            <td>
<input type="text" name="age"
       value="<?php echo $a[2]; ?>">
            </td>            
        </tr>
        <tr>
 <td colspan="2" align="center">
<input type="submit" name="edit"
       value="edit">
            </td>            
        </tr>
    </table>
</form>
<?php
if(isset($_POST["edit"]))
{
    $name=$_POST["name"];
    $age=$_POST["age"];
    
    $query="update student set name='$name',age=$age where rno=$rno";
    echo $query;
    mysqli_query($con, $query);
    $n= mysqli_affected_rows($con);
    if($n>0)
        header('location:showall.php');
    else
        echo "try again";
}
?>