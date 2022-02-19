<?php
require("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<iOS/android/handheld specific>
<meta name="viewport" content="width=device-width, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description" content="Multiple dropdown with jquery ajax and php">
<meta name="keywords" content="Multiple dropdown with jquery ajax and php">
<meta name="author">
<title></title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
.table
{
	BORDER-COLLAPSE: collapse;
    BORDER-COLOR: black;
	
}

select
{
	BORDER-LEFT: #999999 1px solid; 
	BORDER-TOP: #999999 1px solid; 
	BORDER-RIGHT: #999999 1px solid; 
	BORDER-BOTTOM: #999999 1px solid; 
	BACKGROUND: #FFFFFF; 
	COLOR: black; 
	FONT-FAMILY: verdana, arial, helvetica, sans-serif; 
	FONT-SIZE:9px;
	background-color:#FFFFD7;
}
</style>
</head>
<div id="container">
  <div id="body">
    <article>
    <form name="main_screen" method="post" action="login_auth.php" enctype="multipart/form-data"> 
      <table class="table"  align="center" border="1" width="50%" bgcolor="#d6eef8" >
            <Tr>
                <td bgcolor="#0000FF" colspan="2" align="center"> <font face="Verdana, Geneva, sans-serif" size="2"  color="#FFFFFF"><b>CENTAUR PHARMACEUTICALS PVT. LTD.</b></font></td>
            </Tr>
	   <tr>
              <td align="right"><b> Username: </b></td>
              <td><input type="text" id="uname" name="uname" size="4" maxlength="4" style="font-size:20px"></td>
	   </tr>
	  <tr>
              <td align="right"><b> Password: </b></td>
              <td><input type="password" id="upass" name="upass" size="4" maxlength="4" style="font-size:20px" ></td>
	  </tr>
	  <tr>
	      <td colspan="2" align="center">
             <input type="submit" value="Login"   style="font-size:25px"></td>
	  </tr>
	   <Tr>
                <td bgcolor="#0000FF" colspan="2" align="center"> <font face="Verdana, Geneva, sans-serif" size="2"  color="#FFFFFF"><b>Please enter your username and password to login</b></font></td>
           </Tr>
	   <tr><td></td></tr>
	   <Tr>
                <td bgcolor="#0000FF" colspan="2" align="center"> <font face="Verdana, Geneva, sans-serif" size="2"  color="#FFFFFF"><a href="change_password.php" style="color:#FFFFFF">Click here to change password</a></font></td>
           </Tr>
	  

        </table>
      </form>
    </article>
</div>
</div>
<script src="jquery-1.9.0.min.js"></script>

<script type="text/javascript">
function submitregistration() {
		if(document.login_page.uname.value==""){
			alert( "Please enter login ID." );
			return false;
		}
		if(document.login_page.upass.value==""){
			alert( "Please enter Password." );
			return false;
		}
		

	    // document.mgr_call_entry.savebtn.value='Saving Record ...';
}
</script> 
