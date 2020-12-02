<?php

$connect = mysqli_connect("localhost","root","","eclife");
if (!$connect) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>