<?php
//session_start();
// define variables and set to empty values
$subjectErr = $bodyErr = $recipientErr="";
$subject = $body= $create=$recipient="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["to"])) {
     $recipientErr = "Recipient is required";
   }else{
   	$recipient = test_input($_POST["to"]);
   }
   if (empty($_POST["subject"])) {
     $subjectErr = "Subject is required";
   }else{
   	$subject = test_input($_POST["subject"]);
   }
   if (empty($_POST["message"])) {
     $bodyErr = "body is required";
   }else{
   	$body = test_input($_POST["message"]);
   }
   
}
     function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
if (!empty($_POST["subject"]) && !empty($_POST["message"]) &&  !empty($_POST["to"])) {
	$servername = "127.0.0.1";
	$user = "root";
	$pass = "bear123";
	$dbname = "Cheapo";

	// Create connection
	$conn = mysqli_connect($servername, $user, $pass, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "INSERT INTO Message(body,subject,recipient)
	VALUES ('$body', '$subject','$recipient')";

	if (mysqli_query($conn,$sql)) {
	    $create="Message Sent";
	} else {
	    $create="Message not sent";
	}
	//close connection
	mysqli_close($conn);
}



