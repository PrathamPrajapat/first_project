<form method="post" enctype="multipart/form-data">    
    <table border="1" align="center">
        <caption>Product Entry Form</caption>
        <tr>
            <td>Product Name*</td>
            <td>
 <input type="text" name="name">
            </td>            
        </tr>
        <tr>
            <td>Price*</td>
            <td>
 <input type="text" name="price">
            </td>            
        </tr>
        <tr>
            <td>product pic*</td>
            <td>
 <input type="file" name="pic1">
            </td>            
        </tr>
        <tr>
 <td colspan="2" align="center">
<input type="submit" name="b1"
       value="upload file">
            </td>            
        </tr>
    </table>
</form>
<?php
if(isset($_POST["b1"]))
{
    //for file uploading .................
    $filename=$_FILES["pic1"]["name"];
    $source=$_FILES["pic1"]["tmp_name"];
    //echo $source;
    $destination="uploads/".$filename;
    move_uploaded_file($source, $destination);
    //........................................
    
    //for insert code ....................
    require './connection.php';
    
    $name=$_POST["name"];
    $price=$_POST["price"];
    
    //for insert query
    $query="insert into product(name,price,filepath) "
     . " values('$name',$price,'$destination') ";
    
    //for execute query
    mysqli_query($con, $query);
    
    //for affectd rows
    $n= mysqli_affected_rows($con);
    if($n>0)
        echo "file uploaded";
    else
        echo "try again";
//.....................................
}
?>

