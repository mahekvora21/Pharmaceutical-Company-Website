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
    <form name="main_screen" method="post" action="change_password_auth.php" enctype="multipart/form-data"> 
      <table class="table"  align="center" border="1" width="50%" bgcolor="#d6eef8" >
            <Tr>
                <td bgcolor="#0000FF" colspan="2" align="center"> <font face="Verdana, Geneva, sans-serif" size="2"  color="#FFFFFF"><b>CENTAUR PHARMACEUTICALS PVT. LTD.</b></font></td>
            </Tr>
	    <tr>
              <td align="center"><b> Employee Code: </b></td>
              <td><input type="text" id="empcde" name="empcde" size="4" maxlength="4" style="font-size:20px"></td>
	   </tr>
	   <tr>
              <td align="center"><b> Current Password: </b></td>
              <td><input type="password" id="oldpwd" name="oldpwd" size="4" maxlength="4" style="font-size:20px"></td>
	   </tr>
	  <tr>
              <td align="center"><b> New Password: </b></td>
              <td><input type="password" id="newpwd" name="newpwd" size="4" maxlength="4" style="font-size:20px" ></td>
	  </tr>
          <tr>
              <td align="center"><b> Confirm New Password: </b></td>
              <td><input type="password" id="cnewpwd" name="cnewpwd" size="4" maxlength="4" style="font-size:20px" ></td>
	  </tr>
	  <tr>
	      <td colspan="2" align="center">
             <input type="submit" value="Confirm" style="font-size:25px"></td>
	  </tr>
	   <Tr>
                <td bgcolor="#0000FF" colspan="2" align="center"> <font face="Verdana, Geneva, sans-serif" size="2"  color="#FFFFFF"><b>Please enter your old and new password and login id</b></font></td>
           </Tr>
	   
        </table>
      </form>
    </article>
</div>
</div> 
