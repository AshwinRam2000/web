<?php



$servername = "localhost";
$username = "username";
$password = "";
$dbname = "myDB";

// Create connection

// Check connection
include_once("DBConnection.php"); 
 session_start();



$stmt= $db->prepare("UPDATE PROFILE1 SET TITLE=?,FIRSTNAME=?,LASTNAME=?,POSITION=?,COMPANY=?,BUSINESSAREA=? ,EMPLOYEE=?,STREET=?,ADDITIONALINFO=?,ZIP=?,PLACE=?,CODE=?,PHONE=?,EMAIL=? WHERE USERNAME= ?");
$stmt->bind_param("sssssssssssssss",$inTITLE,$inFIRSTNAME,$inLASTNAME,$inPOSITION,$inCOMPANY,$inBUSINESSAREA,$inEMPLOYEE,$inSTREET,$inADDITIONALINFO,$inZIP,$inPLACE,$inCODE,$inPHONE,$inEMAIL,$inUSERNAME);


$inTITLE=$_POST["title"];
$inFIRSTNAME=$_POST["first_name"];
$inLASTNAME=$_POST["last_name"];
$inPOSITION=$_POST["position"];
$inCOMPANY=$_POST["company"];
$inBUSINESSAREA=$_POST["business"];
$inEMPLOYEE=$_POST["employees"];
$inSTREET=$_POST["street"];
$inADDITIONALINFO=$_POST["additional"];
$inZIP=$_POST["zip"];
$inPLACE=$_POST["place"];
$inCODE=$_POST["code"];
$inPHONE=$_POST["phone"];
$inEMAIL=$_POST["your_email"];
$inUSERNAME = $_POST["user"]; 

$stmt->execute();

echo '<script language="javascript">';
    echo 'alert("Update value finished ")';
    echo '</script>';
$stmt->close();
?>