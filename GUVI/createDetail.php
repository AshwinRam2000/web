<?php



$servername = "localhost";
$username = "username";
$password = "";
$dbname = "myDB";

// Create connection

// Check connection
include_once("DBConnection.php"); 
 session_start();



 $inuser = $_POST["user"]; 
$stmt= $db->prepare("INSERT INTO PROFILE1 (TITLE,FIRSTNAME,LASTNAME,POSITION,COMPANY,BUSINESSAREA,EMPLOYEE,STREET,ADDITIONALINFO,ZIP,PLACE,CODE,PHONE,EMAIL) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?) "); //Fetching all the records with input credentials
  //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.



//$stmt->bind_param("ssssssssssssss",$inTITLE,$inFIRSTNAME,$inLASTNAME,$inPOSITION,$inCOMPANY,$inBUSINESSAREA,$inEMPLOYEE,$inSTREET,$inADDITIONALINFO,$inZIP,$inPLACE,$inCODE,$inPHONE,$inEMAIL);

$stmt->execute();

echo '<script language="javascript">';
    echo 'alert("Update value finished ")';
    echo '</script>';
$stmt->close();
?>