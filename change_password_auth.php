<?php
require("connection.php");
$proceed="Y";
$empcde=$_REQUEST['empcde'];
$oldpwd=$_REQUEST['oldpwd'];
$newpwd=$_REQUEST['newpwd'];
$cnewpwd=$_REQUEST['cnewpwd'];
if ($empcde==''){
  $proceed="N";
?>
  <script>
        alert('Please enter Employee code');
        location.href ="change_password.php";
  </script>
<?php
}


if ($oldpwd==''){
  $proceed="N";
  ?> 
 <script>
        alert('Please enter old password');
        location.href="change_password.php";
  </script>
<?php
}

if ($newpwd==''){
  $proceed="N";
  ?> 
 <script>
        alert('Please enter new password');
        location.href="change_password.php";
  </script>
<?php
}

if ($cnewpwd==''){
  $proceed="N";
  ?> 
 <script>
        alert('Please confirm new password');
        location.href="change_password.php";
  </script>
<?php
}
if ($oldpwd==$newpwd){
  $proceed="N";
  ?> 
 <script>
        alert('The old password is same as the new password');
        location.href="change_password.php";
  </script>
<?php
}
if ($cnewpwd!=$newpwd){
  ?> 
 <script>
        alert('The confirmed password is incorrect. Try Again!');
        location.href="change_password.php";
  </script>
<?php
}

$auth_password=$DB_site_ereporting->query_first_ereporting("select * from  centaur.login_id where login_id='$empcde' 
and password='$oldpwd' ");
if($auth_password['login_id']=='')
{
  $proceed="N";
 ?> 
 <script>
        alert('Invalid old password');
        location.href="change_password.php";
  </script>
<?php
}

$dup_password=$DB_site_ereporting->query_first_ereporting("select * from  centaur.login_id where password='$newpwd' ");
if($dup_password['login_id']!='')
{
  $proceed="N";
 ?> 
 <script>
        alert('Password is in use. Please try another password');
        location.href="change_password.php";
  </script>
<?php
}




if($proceed=="Y")	
{
	$insdetl="update centaur.login_id set
        password='".$_POST['newpwd']."'
	where login_id='".$_POST['empcde']."'";
	$DB_site_ereporting->query_ereporting($insdetl);
 ?> 
 <script>
        alert('Password successfully updated.');
        location.href="login_page.php";
  </script>
<?php
	
}

