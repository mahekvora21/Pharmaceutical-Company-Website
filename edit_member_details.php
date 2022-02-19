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
</head>
    <form name="main_screen" method="post" action="save_member_details.php" enctype="multipart/form-data"> 
      <table align="center" border="1" width="100%" bgcolor="#d6eef8" >
            <Tr>
                <td bgcolor="#0000FF" colspan="2" align="center"> <font face="Verdana, Geneva, sans-serif" size="2"  color="#FFFFFF"><b>CENTAUR PHARMACEUTICALS PVT. LTD.</b></font></td>
            </Tr>
	   <tr>
              <td align="right" width="20%"><b> Mobile number:  </b></td>
              <td><input type="text" id="mob_no" name="mob_no" size="10" maxlength="10" style="font-size:20px">*</td>
	   </tr>
	  <tr>
              <td align="right"><b> Aadhar Card Number: </b></td>
              <td><input type="text" id="aadhar_no" name="aadhar_no" size="50" maxlength="50" style="font-size:20px" >*</td>
	  </tr>
	  <tr>
              <td align="right"><b> Address 1: </b></td>
              <td><input type="text" id="add1" name="add1" size="25" maxlength="25" style="font-size:20px" >*</td>
	  </tr>
	  <tr>
              <td align="right"><b> Address 2: </b></td>
              <td><input type="text" id="add2" name="add2" size="25" maxlength="25" style="font-size:20px" >*</td>
	  </tr>
	  <tr>
              <td align="right"><b> Address 3: </b></td>
              <td><input type="text" id="add3" name="add3" size="25" maxlength="25" style="font-size:20px" >*</td>
	  </tr>
	  <tr>
              <td align="right"><b> Pin: </b></td>
              <td><input type="text" id="pin" name="pin" size="6" maxlength="6" style="font-size:20px" >*</td>
	  </tr>
	  <tr>
              <td align="right"><b> State: </b></td>
              <td><input type="text" id="state" name="state" size="20" maxlength="20" style="font-size:20px" >*</td>
	  </tr>
	  <tr>
              <td align="right"><b> Hobbies: </b></td>
              <td><input type="text" id="hobbies" name="hobbies" size="15" maxlength="15" style="font-size:20px" >*</td>
	  </tr>
	  <tr>
              <td align="right"><b> Qualification: </b></td>
              <td><input type="text" id="qualification" name="qualification" size="15" maxlength="15" style="font-size:20px" >*</td>
	  </tr>
	  <tr>
              <td align="right"><b> Remark: </b></td>
              <td><textarea id="rem" name="rem" rows="4" cols="50" ></textarea>*</td>
	  </tr>
	 <tr>
		<td colspan="2" align="left">
<!--input type="submit" id="submit" name="submit" value="Submit" style="font-size:25px"></td-->
* indicates compulsory input	
 <input type="submit" id="savebtn" name="savebtn" value="Save Details" 
 onClick="return(submitregistration());" style="font-size:25px">

 </tr>
        </table>
      </form>

<script type="text/javascript">
function submitregistration() {
		if(document.main_screen.mob_no.value==""){
			alert( "Please enter mobile number" );
			return false;
		}
		if(document.main_screen.aadhar_no.value==""){
			alert( "Please enter aadhar card number" );
			return false;
		}
		if(document.main_screen.add1.value==""){
			alert( "Please enter address 1" );
			return false;
		}
		if(document.main_screen.add2.value==""){
			alert( "Please enter address 2" );
			return false;
		}
		if(document.main_screen.add3.value==""){
			alert( "Please enter address 3" );
			return false;
		}
		if(document.main_screen.pin.value==""){
			alert( "Please enter the pin");
			return false;
		}
		if(document.main_screen.state.value==""){
			alert( "Please enter state" );
			return false;
		}
		if(document.main_screen.hobbies.value==""){
			alert( "Please enter hobbies" );
			return false;
		}
		if(document.main_screen.qualification.value==""){
			alert( "Please enter qualifications" );
			return false;
		}
		if(document.main_screen.rem.value==""){
			alert( "Please enter remarks" );
			return false;
		}
		
}
</script> 