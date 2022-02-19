<?php
require("connection.php");


$uname=$_REQUEST['uname'];
$upass=$_REQUEST['upass'];

if ($uname==''){
  ?>
  <script>
        alert('Please enter User ID');

        location.href ="login_page.php";
  </script>
<?php
}


if ($upass==''){
  ?> 
 <script>
        alert('Please enter password');
        location.href="login_page.php";
  </script>
<?php
}

$auth_password=$DB_site_ereporting->query_first_ereporting("select * from  centaur.login_id where login_id='$uname' 
and password='$upass' ");

if ($auth_password['login_id']!=''){
     $username=$auth_password['login_name'];
      ?> 
   <script>
        location.href="menu.php";
    </script>
  <?php
 	


} else {
   ?> 
   <script>
        alert('You are not authorized user');
        location.href="login_page.php";
    </script>
  <?php
 		
}


