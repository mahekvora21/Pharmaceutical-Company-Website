<?php
require("connection.php");
$empcde=$_REQUEST['empcde'];
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
    <form name="main_screen" method="post"  enctype="multipart/form-data"> 
	<input type="hidden" name="delrec" id="delrec">
      <table align="center" border="1" width="100%" bgcolor="#d6eef8" >
            <Tr>
                <td bgcolor="#0000FF" colspan="2" align="center"> <font face="Verdana, Geneva, sans-serif" size="2"  color="#FFFFFF"><b>CENTAUR PHARMACEUTICALS PVT. LTD.</b></font></td>
            </Tr>

	    <tr>
		<td align="right"><b>Select Employee Code:</b></td>
		<td>
		<select  name="empcde" style="font-size:20px" onChange="javascript:selectact();" >
               <option value="">-- Select -- </option>
               <?php
               $sel_grpcombo='';
	       $sql_grp="select * from centaur.login_id order by login_id";
	       $db_query_grp=$DB_site_ereporting->query_ereporting($sql_grp);
               while($result_grp=$DB_site_ereporting->fetch_array_ereporting($db_query_grp))
              {
	              $sel_grpcombo=$sel_grpcombo."<option value='".$result_grp['login_id']."'";
			if($result_grp['login_id']==$empcde){
                           $sel_grpcombo=$sel_grpcombo." selected";
                       }
                       $sel_grpcombo=$sel_grpcombo.">".$result_grp['login_id'].' ('.$result_grp['login_name'].')'."</option>\n";
		}

                    echo $sel_grpcombo;

               ?>
               </select>
		</td>
	   </tr>

	<?php if($empcde!=""){
	$found_details=$DB_site_ereporting->query_first_ereporting("select * from  centaur.statistic_fieldforce where empcde='$empcde' ");
	if($found_details['empcde']!=""){
	  $ach_04=$found_details['ach_04'];
	  $ach_05=$found_details['ach_05'];
	  $ach_06=$found_details['ach_06'];
	  $ach_07=$found_details['ach_07'];
	  $ach_08=$found_details['ach_08'];
	  $ach_09=$found_details['ach_09'];
	}
	?>
<?php
$dataPoints = array( 
	array("y" => (float)$ach_04, "label" => "ach_04" ),
	array("y" => (float)$ach_05, "label" => "ach_05" ),
	array("y" => (float)$ach_06, "label" => "ach_06" ),
	array("y" => (float)$ach_07, "label" => "ach_07" ),
	array("y" => (float)$ach_08, "label" => "ach_08" ),
	array("y" => (float)$ach_09, "label" => "ach_09" )
);
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Empoyee's achievements"
	},
	axisY: {
		title: "Employee Data"
	},
	data: [{
		type: "column",
		yValueFormatString: "##0.## tonnes",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
	   
	  
	 
<?php } ?>

<tr>
	<td colspan="2" align="center"><input type="button" id="home" name="home" value="Home" 
 onClick="javascript:document.location.href='menu.php'" style="font-size:25px">
</td>
</tr>
        </table>
      </form>

<script type="text/javascript">

function selectact(){

               empcde=document.main_screen.empcde.value;

  newurl = 'graphs_page.php?&empcde='+empcde;

               document.location.href=newurl;

}


</script> 