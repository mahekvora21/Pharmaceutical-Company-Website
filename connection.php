<?php

$dbservertype_ereporting="";
$servername_ereporting="localhost";
$dbusername_ereporting="root";
$dbpassword_ereporting="AppServ930";
$dbname_ereporting="centaur";



$technicalemail_ereporting = "it@centaurlab.com";
$usepconnect_ereporting=0;
$download_path_ereporting = "./download_path";

$DB_site_ereporting=new DB_Sql_vb_ereporting;
$DB_site_ereporting->database_ereporting=$dbname_ereporting;
$DB_site_ereporting->server_ereporting=$servername_ereporting;
$DB_site_ereporting->user_ereporting=$dbusername_ereporting;
$DB_site_ereporting->password_ereporting=$dbpassword_ereporting;
$DB_site_ereporting->connect_ereporting();
// end init db


function get_filename_ereporting($filename_ereporting) {
    $ext_ereporting = get_ext_ereporting( $filename_ereporting );
    $retval_ereporting = str_replace( $ext_ereporting, "", $filename_ereporting );
        
    return $retval_ereporting;
}

function get_ext_ereporting( $filename_ereporting ) {
    $photolen_ereporting = strlen($filename_ereporting);
    
    if ( $filename_ereporting[$photolen_ereporting-3] == "." )
        $retval_ereporting = substr( $filename_ereporting, $photolen_ereporting-3, $photolen_ereporting);
    elseif ( $filename_ereporting[$photolen_ereporting-5] == "." )
        $retval_ereporting = substr( $filename_ereporting, $photolen_ereporting-5, $photolen_ereporting);
    else
        $retval_ereporting = substr( $filename_ereporting, $photolen_ereporting-4, $photolen_ereporting);

    return $retval_ereporting;
}

function fixfilenames_ereporting( $realname_ereporting ) {
    $realname_ereporting = urldecode($realname_ereporting);
    
    $realname_ereporting  = str_replace( "%20", "_", $realname_ereporting );
    $realname_ereporting  = ereg_replace( "\\\\'", "_", $realname_ereporting );
    
    $stripname_ereporting = get_filename_ereporting( $realname_ereporting );
    $theext_ereporting    = get_ext_ereporting( $realname_ereporting );
    
    $stripname_ereporting = ereg_replace( "[^a-zA-Z0-9/\:_\-]", "_", $stripname_ereporting );
    $realname_ereporting  = "{$stripname_ereporting}{$theext_ereporting}";
    
	// Lets try to make it look better
	$realname_ereporting = ereg_replace("_+", "_", $realname_ereporting);
	$realname_ereporting = ereg_replace("(^_|_$)", "", $realname_ereporting);

    return( $realname_ereporting );
}

function quote_ereporting($varquote_ereporting)
{
	$new_var_ereporting = strtr($varquote_ereporting, "'", "^"); 
	return $new_var_ereporting;
}

function retu_quote_ereporting($varquote_ereporting)
{
	$varquote_ereporting= stripslashes($varquote_ereporting);
	$new_var_ereporting = strtr($varquote_ereporting, "^", "'"); 
	return $new_var_ereporting;
}


class DB_Sql_vb_ereporting {
//  var $database_ereporting = "auto";
  var $link_id_ereporting  = 0;
  var $query_id_ereporting = 0;
  var $record_ereporting   = array();
  var $errdesc_ereporting    = "";
  var $errno_ereporting   = 0;
//  var $reporterror_ereporting = 1;
//  var $server_ereporting   = "localhost";
//  var $user_ereporting     = "root";
//  var $password_ereporting = "";

  var $appname_ereporting  = "vBulletin Deepak";
  var $appshortname_ereporting = "vBulletin (cp)";

  function connect_ereporting() {
    $usepconnect_ereporting=0;
    // connect to db server

    if ( 0 == $this->link_id_ereporting ) {
      if ($this->password_ereporting=="") {
        if ($usepconnect_ereporting==1) {
          $this->link_id_ereporting=mysqli_connect($this->server_ereporting,$this->user_ereporting,$this->password_ereporting);
        } else {
          $this->link_id_ereporting=mysqli_connect($this->server_ereporting,$this->user_ereporting,$this->password_ereporting);
        }
      } else {
        if ($usepconnect_ereporting==1) {
          $this->link_id_ereporting=mysqli_connect($this->server_ereporting,$this->user_ereporting,$this->password_ereporting);
        } else {
          $this->link_id_ereporting=mysqli_connect($this->server_ereporting,$this->user_ereporting,$this->password_ereporting);
        }
      }
			
      if (!$this->link_id_ereporting) {
        $this->halt_ereporting("Link-ID == false, connect failed");
				
      }
      if ($this->database_ereporting!="") {
        if(!mysqli_select_db($this->link_id_ereporting,$this->database_ereporting)) {
					
          $this->halt_ereporting("cannot use database ".$this->database_ereporting);
        }
				
      }
    }
  }

  function geterrdesc_ereporting() {
    $this->error_ereporting=mysqli_error($this->database_ereporting);
    return $this->error_ereporting;
  }

  function geterrno_ereporting() {
    $this->errno_ereporting=mysqli_errno($this->database_ereporting);
    return $this->errno_ereporting;
  }

  function select_db_ereporting($database_ereporting="") {
    // select database
		
    if ($database_ereporting!="") {
      $this->database_ereporting=$database_ereporting;
    }

    if(!mysqli_select_db($this->database_ereporting, $dbname_ereporting)) {
      $this->halt_ereporting("cannot use database ".$this->database_ereporting);
    }

  }

  function query_ereporting($query_string_ereporting) {
		
		
    global $query_count_ereporting,$showqueries_ereporting,$explain_ereporting,$querytime_ereporting;
    // do query

    if ($showqueries_ereporting) {
      echo "Query: $query_string\n";

      global $pagestarttime_ereporting;
      $pageendtime_ereporting=microtime();
      $starttime_ereporting=explode(" ",$pagestarttime_ereporting);
      $endtime_ereporting=explode(" ",$pageendtime_ereporting);

      $beforetime_ereporting=$endtime_ereporting[0]-$starttime_ereporting[0]+$endtime_ereporting[1]-$starttime_ereporting[1];

      echo "Time before: $beforetime\n";
    }

    $this->query_id_ereporting = mysqli_query($this->link_id_ereporting,$query_string_ereporting);
		
    if (!$this->query_id_ereporting) {
			
      echo "Invalid SQL: ".$query_string_ereporting;
	  //$this->halt("Invalid SQL: ".$query_string);
    }

    $query_count_ereporting++;

    if ($showqueries_ereporting) {
      $pageendtime_ereporting=microtime();
      $starttime_ereporting=explode(" ",$pagestarttime_ereporting);
      $endtime_ereporting=explode(" ",$pageendtime_ereporting);

      $aftertime_ereporting=$endtime_ereporting[0]-$starttime_ereporting[0]+$endtime_ereporting[1]-$starttime_ereporting[1];
      $querytime_ereporting+=$aftertime_ereporting-$beforetime_ereporting;

      echo "Time after:  $aftertime_ereporting\n";

      if ($explain_ereporting and substr(trim(strtoupper($query_string_ereporting)),0,6)=="SELECT") {
        $explain_id_ereporting = mysqli_query("EXPLAIN $query_string_ereporting",$this->link_id_ereporting);
        echo "</pre>\n";
        echo "
        <table width=100% border=1 cellpadding=2 cellspacing=1>
        <tr>
          <td><b>table</b></td>

          <td><b>type</b></td>
          <td><b>possible_keys</b></td>
          <td><b>key</b></td>
          <td><b>key_len</b></td>
          <td><b>ref</b></td>
          <td><b>rows</b></td>
          <td><b>Extra</b></td>
        </tr>\n";
        while($array_ereporting=mysqli_fetch_array($explain_id_ereporting)) {
          echo "
          <tr>
            <td>$array_ereporting[table]&nbsp;</td>
            <td>$array_ereporting[type]&nbsp;</td>
            <td>$array_ereporting[possible_keys]&nbsp;</td>
            <td>$array_ereporting[key]&nbsp;</td>
            <td>$array_ereporting[key_len]&nbsp;</td>
            <td>$array_ereporting[ref]&nbsp;</td>
            <td>$array_ereporting[rows]&nbsp;</td>
            <td>$array_ereporting[Extra]&nbsp;</td>
          </tr>\n";
        }
        echo "</table>\n<BR><hr>\n";
        echo "\n<pre>";
      } else {
        echo "\n<hr>\n\n";
      }
    }

    return $this->query_id_ereporting;
  }

  function fetch_array_ereporting($query_id_ereporting=-1,$query_string_ereporting="") {
    // retrieve row
    if ($query_id_ereporting!="-1") {
      $this->query_id_ereporting=$query_id_ereporting;
    }
    if ( isset($this->query_id_ereporting) ) {
      $this->record_ereporting = mysqli_fetch_array($this->query_id_ereporting);
    } else {
      if ( !empty($query_string_ereporting) ) {
        $this->halt_ereporting("Invalid query id (".$this->query_id_ereporting.") on this query: $query_string_ereporting");
      } else {
        $this->halt_ereporting("Invalid query id ".$this->query_id_ereporting." specified");
      }
    }

    return $this->record_ereporting;
  }

  function free_result_ereporting($query_id_ereporting=-1) {
    // retrieve row
    if ($query_id_ereporting!="-1") {
      $this->query_id_ereporting=$query_id_ereporting;
    }
    return @mysqli_free_result($this->query_id_ereporting);
  }

  function query_first_ereporting($query_string_ereporting) {
    // does a query and returns first row
    $query_id_ereporting = $this->query_ereporting($query_string_ereporting);
    $returnarray_ereporting=$this->fetch_array_ereporting($query_id_ereporting, $query_string_ereporting);
	$this->free_result_ereporting($query_id_ereporting);
    return $returnarray_ereporting;
  }

  function data_seek_ereporting($pos_ereporting,$query_id_ereporting=-1) {
    // goes to row $pos
    if ($query_id_ereporting!=-1) {
      $this->query_id_ereporting=$query_id_ereporting;
    }
    return mysqli_data_seek($this->query_id_ereporting, $pos_ereporting);
  }

  function num_rows_ereporting($query_id_ereporting=-1) {
    // returns number of rows in query
    if ($query_id_ereporting!=-1) {
      $this->query_id_ereporting=$query_id_ereporting;
    }
    return mysqli_num_rows($this->query_id_ereporting);
  }

  function num_fields_ereporting($query_id_ereporting=-1) {
    // returns number of fields in query
    if ($query_id_ereporting!=-1) {
      $this->query_id_ereporting=$query_id_ereporting;
    }
    return mysqli_num_fields($this->query_id_ereporting);
  }

  function insert_id_ereporting() {
    // returns last auto_increment field number assigned

    return mysqli_insert_id($this->link_id_ereporting);

  }

  function close() {
  	// closes connection to the database

	return mysqli_close();
  }

  function halt_ereporting($msg_ereporting) {
    $this->errdesc_ereporting=mysqli_error($this->database_ereporting);
    $this->errno_ereporting=mysql_errno($this->database_ereporting);
    // prints warning message when there is an error
    global $technicalemail_ereporting, $bbuserinfo_ereporting, $scriptpath_ereporting, $HTTP_SERVER_VARS;

    if ($this->reporterror_ereporting==1) {
      $message_ereporting="ERPSNDereporting DEEPAK Database error in " . $this->appname_ereporting . " $GLOBALS[templateversion]:\n\n$msg\n";
      $message_ereporting.="mysql error: " . $this->errdesc_ereporting . "\n\n";
      $message_ereporting.="mysql error number: " . $this->errno_ereporting . "\n\n";
      $message_ereporting.="Date: ".date("l dS of F Y h:i:s A")."\n";
      $message_ereporting.="Script: $GLOBALS[bburl]" . (($scriptpath_ereporting) ? $scriptpath_ereporting : $HTTP_SERVER_VARS['REQUEST_URI']) . "\n";
      $message_ereporting.="Referer: ".$HTTP_SERVER_VARS['HTTP_REFERER']."\n";

      if ($technicalemail_ereporting) {
        //@mail ($technicalemail_ereporting,$this->appshortname_ereporting. " Database error!",$message_ereporting,"From: $technicalemail_ereporting");
      }

      echo "<html><head><title>$GLOBALS[bbtitle] Database Error</title><style>P,BODY{FONT-FAMILY:tahoma,arial,sans-serif;FONT-SIZE:11px;}</style><body>\n\n<!-- $message -->\n\n";

      echo "</table></td></tr></table></form>\n<blockquote><p>&nbsp;</p><p><b>There seems to have been a slight problem with the database.</b><br>\n";
      echo "Please try again by pressing the <a href=\"javascript:window.location=window.location;\">refresh</a> button in your browser.</p>";
      echo "An E-Mail has been dispatched to our <a href=\"mailto:$technicalemail_ereporting\">Technical Staff</a>, who you can also contact if the problem persists.</p>";
      echo "<p>We apologise for any inconvenience.</p>";

      if ($bbuserinfo_ereporting['usergroupid']==6) {
        echo "<form><textarea rows=\"12\" cols=\"60\">".htmlspecialchars($message_ereporting)."</textarea></form>";
      }

	  echo "</blockquote></body></head></html>";
      exit;
    }
  }
}

?>
