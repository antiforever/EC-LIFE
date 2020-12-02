<?php

$connect = new mysqli("localhost","root","","registrationform");
if (!$connect) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>