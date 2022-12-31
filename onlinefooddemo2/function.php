<?php
function runQuery($query) 
{
    require './connection.php';

$result = mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result)) 
{
$resultset[] = $row;
}		
if(!empty($resultset))
return $resultset;
	}
 ?>