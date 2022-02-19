<?php
require("connection.php");

if($_POST['delrec']==''){

$found_details=$DB_site_ereporting->query_first_ereporting("select * from  centaur.member_details 
where empcde='".$_POST['empcde']."' ");
	if($found_details['empcde']==""){

	$insdetl="insert into centaur.member_details ( `empcde`,`mobile_no`, `aadhar_card_no`, `address_1`, `address_2`, `address_3`, `pin`, `state`, `hobbies`, `qualification`, `remark`) 
	value('".$_POST['empcde']."','".$_POST['mob_no']."','".strtoupper($_POST['aadhar_no'])."','".strtoupper($_POST['add1'])."','".strtoupper($_POST['add2'])."','".strtoupper($_POST['add3'])."','".$_POST['pin']."','".strtoupper($_POST['state'])."',
	'".strtoupper($_POST['hobbies'])."','".strtoupper($_POST['qualification'])."','".$_POST['rem']."')";
	$DB_site_ereporting->query_ereporting($insdetl);   

} else {
	$insdetl="update centaur.member_details set
        mobile_no='".$_POST['mob_no']."',
	aadhar_card_no='".$_POST['aadhar_no']."',
	address_1='".$_POST['add1']."',
	address_2='".$_POST['add2']."',
	address_3='".$_POST['add3']."',
	pin='".$_POST['pin']."',
	state='".$_POST['state']."',
	hobbies='".$_POST['hobbies']."',
	qualification='".$_POST['qualification']."',
	remark='".$_POST['rem']."'
	
	where empcde='".$_POST['empcde']."'
 ";
	$DB_site_ereporting->query_ereporting($insdetl);

}




?>
 <script>
        alert('Record saved successfully');
        location.href="member_details.php";
  </script>

<?php

}else {
$insdetl="delete from centaur.member_details where empcde='".$_POST['empcde']."' ";
	$DB_site_ereporting->query_ereporting($insdetl);
?>
 <script>
        alert('Record deleted successfully');
        location.href="member_details.php";
  </script>

<?php


}