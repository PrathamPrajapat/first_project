<?php
/*
Template Name: entry form
 */

get_header(); 
?>
<div>
<form method="post">
<table border="1">
<tr>
<td>Emp id</td>
<td><input type="text"  name="eid"
 required></td>
</tr>
<tr>
<td>Emp name</td>
<td><input type="text"  name="enm" required></td>
</tr>

<tr>
<td>Post</td>
<td><input type="text" name="post" required></td>
</tr>

<tr>
<td>salary</td>
<td><input type="text"  name="salary" required></td>
</tr>
<tr>
<td><input type="submit"  name="save" 
 value="save"></td>
</tr>
</table>
</form>
</div>
<?php
if(isset($_REQUEST["save"]))
{
	extract($_REQUEST);
	global $wpdb; // To Establish Connection
	$data = array("eid" => $eid, "enm" => $enm, "post" => $post, "salary" => $salary);
	$n = $wpdb->insert("empdetails", $data);
	echo "n = " . $n;
}
?>

<?php get_footer(); ?>
