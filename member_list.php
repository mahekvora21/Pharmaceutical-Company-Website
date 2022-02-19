<?php
require("connection.php");




$auth_password=$DB_site_ereporting->query_first_ereporting("select * from  centaur.login_id where login_id='$uname' 
and password='$upass' ");

 ?>
<table border="1">
<tr>
	<td colspan="3" align="center"><input type="button" value="home" onClick="javascript:document.location.href='menu.php'"></td>
	</tr>
	<tr>
		<td>Srn</td>
		<td>Member ID</td>
		<td>Member Name</td>
	</tr>
<?php
$i=1;
$sqld_spcl="select * from  centaur.login_id where active='Y'";

$db_querys_spcl=$DB_site_ereporting->query_ereporting($sqld_spcl);

while ($result_spcl=$DB_site_ereporting->fetch_array_ereporting($db_querys_spcl)) {

$id=$result_spcl['login_id'];
$mname=$result_spcl['login_name'];
  ?>
 <tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $id; ?></td>
	<td><?php echo $mname; ?></td>
 </tr>
<?php
$i++;
}
?>
</table>