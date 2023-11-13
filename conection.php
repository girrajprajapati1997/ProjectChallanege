<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registrationform1";

$conn = "mysqli_connect('$servername','$username','$password','$dbname')";

if ($conn) 
{
	echo "connection ok" ;
}
else
{
	echo "Connect failed: %s\n", mysqli_connect_error();
}

?>