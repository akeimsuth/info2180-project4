
<?php
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}
session_start();
$status=$st="";
	
$_SESSION['username']="";
$_SESSION['login']="login";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$_SESSION['username']=$_REQUEST['username'];
	$_SESSION['register']="";
	mysql_connect("127.0.0.1", "root", "bear123") or die (mysql_error ());

	mysql_select_db("Cheapo") or die(mysql_error());

	$strSQL = "SELECT * FROM User";

	$rs = mysql_query($strSQL);
	
	while($row = mysql_fetch_array($rs)) {
	  if($_POST['username']==$row['username'] && password_verify($_POST['password'],$row['password'])){
	  
	  	Redirect('index.php', false);
	  }else{
	  	$status="Login Failed";
	  }
	  if($_REQUEST['username']=='admin'){
	  	$_SESSION['register']="Registration";
	  	$_SESSION['login']="logout";
	  }
}
	// Close the database connection
	mysql_close();
}
$_SESSION['index']="Home.html";
$_SESSION['login']="logout";
