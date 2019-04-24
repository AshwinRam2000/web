<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "myDB";

// Create connection

// Check connection
include_once("DBConnection.php"); 
 session_start();
$inUsername = $_POST["username1"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
 $inPassword = $_POST["password1"]; 

 
$stmt= $db->prepare("INSERT INTO PROFILE1 (USERNAME, PASSWORD) VALUES (?,?)"); //Fetching all the records with input credentials
  //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
$stmt->bind_param("ss",$inUsername1 ,$inPassword1);
$inUsername1 = $_POST["username1"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
 $inPassword1 = $_POST["password1"]; 
  $stmt->execute();
/*if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Go to log in page")';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();*/
echo '<script language="javascript">';
    echo 'alert("Sign up finished! Kindly, Go back to login page ")';
    echo '</script>';
$stmt->close();
?>