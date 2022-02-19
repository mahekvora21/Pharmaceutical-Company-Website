<?php
require("connection.php");

 ?>
<table border="1">
	<tr>
	<td colspan="12" align="center"><input type="button" value="home" onClick="javascript:document.location.href='menu.php'"></td>
	</tr>
	<tr bgcolor='#FF0000'>
		<td><font color='#FFFFFF'><b> Srn</b></font></td>
		<td><font color='#FFFFFF'><b>Employee Code</b></font></td>
		<td><font color='#FFFFFF'><b>Mobile number</b></font></td>
		<td><font color='#FFFFFF'><b>Aadhar card number</b></font></td>
		<td><font color='#FFFFFF'><b>Address 1</b></font></td>
		<td><font color='#FFFFFF'><b>Address 2</b></font></td>
		<td><font color='#FFFFFF'><b>Address 3</b></font></td>
		<td><font color='#FFFFFF'><b>Pin</b></font></td>
		<td><font color='#FFFFFF'><b>State</b></font></td>
		<td><font color='#FFFFFF'><b>Hobbies</b></font></td>
		<td><font color='#FFFFFF'><b>Qualification</b></font></td>
		<td><font color='#FFFFFF'><b>Remarks</b></font></td>
	</tr>
<?php
$i=1;
$sqld_spcl="select * from  centaur.member_details";

$db_querys_spcl=$DB_site_ereporting->query_ereporting($sqld_spcl);

while ($result_spcl=$DB_site_ereporting->fetch_array_ereporting($db_querys_spcl)) {

$mno=$result_spcl['mobile_no'];
$acno=$result_spcl['aadhar_card_no'];
$add1=$result_spcl['address_1'];
$add2=$result_spcl['address_2'];
$add3=$result_spcl['address_3'];
$pin=$result_spcl['pin'];
$state=$result_spcl['state'];
$hob=$result_spcl['hobbies'];
$qual=$result_spcl['qualification'];
$rem=$result_spcl['remark'];
$empcde=$result_spcl['empcde'];
  ?>
 <tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $empcde; ?></td>
	<td><?php echo $mno; ?></td>
	<td><?php echo $acno; ?></td>
	<td><?php echo $add1; ?></td>
	<td><?php echo $add2; ?></td>
	<td><?php echo $add3; ?></td>
	<td><?php echo $pin; ?></td>
	<td><?php echo $state; ?></td>
	<td><?php echo $hob; ?></td>
	<td><?php echo $qual; ?></td>
	<td><?php echo $rem; ?></td>
 </tr>
<?php
$i++;
}
?>
</table>