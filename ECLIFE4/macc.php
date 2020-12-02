<?php
session_start(); 

$tamount = $_GET['tamount'];
$ypay = $_GET['ypay'];
$termspay = $_GET['termspay'];

if($ypay == 1 && $termspay == "Monthly"){
	$tamount2= $tamount/12;
}elseif ($ypay == 1 && $termspay == "Quarterly") {
	$tamount2= $tamount/4;
}elseif ($ypay == 1 && $termspay == "Semi-Annually") {
	$tamount2= $tamount/2;
}elseif ($ypay == 1 && $termspay == "Annually") {
	$tamount2= $tamount/1;
}elseif($ypay == 3 && $termspay == "Monthly"){
	$tamount2= $tamount/36;
}elseif ($ypay == 3 && $termspay == "Quarterly") {
	$tamount2= $tamount/12;
}elseif ($ypay == 3 && $termspay == "Semi-Annually") {
	$tamount2= $tamount/6;
}elseif ($ypay == 3 && $termspay == "Annually") {
	$tamount2= $tamount/3;
}elseif($ypay == 5 && $termspay == "Monthly"){
	$tamount2= $tamount/60;
}elseif ($ypay == 5 && $termspay == "Quarterly") {
	$tamount2= $tamount/20;
}elseif ($ypay == 5 && $termspay == "Semi-Annually") {
	$tamount2= $tamount/10;
}elseif ($ypay == 5 && $termspay == "Annually"){
	$tamount2= $tamount/5;
}else{

}



include('includes/conn.php');




$query ="INSERT INTO  tbl_package(mid,tamount,ypay,termspay,tpay) VALUES('".$_SESSION['mid']."','$tamount', '$ypay', '$termspay', '$tamount2')";




     					if (mysqli_query($connect, $query)){

			            		echo '<script type="text/javascript">'; 
								echo 'alert("Manage Account successfully");'; 
		 						echo 'window.location.href = "dashboard.php";';
								echo '</script>';   
								       
			            } else {
			            	echo '<script type="text/javascript">'; 
							echo 'alert("Error Connection!");'; 
							echo 'window.location.href = "manacc.php";';
						}
			            mysqli_close($connect);


?>