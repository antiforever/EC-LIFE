<?php
session_start(); 

$medex= $_GET['medex'];
$edex = $_GET['edex'];
$midex = $_GET['midex'];
$groex = $_GET['groex'];





include('includes/conn.php');




$query ="INSERT INTO  tbl_benper(mid,medex,edex,midex,groex) VALUES('".$_SESSION['mid']."','$medex','$edex','$midex','$groex')";




     					if (mysqli_query($connect, $query)){

			            		echo '<script type="text/javascript">'; 
								echo 'alert("Benefits Percentage Saved successfully");'; 
		 						echo 'window.location.href = "dashboard.php";';
								echo '</script>';   
								       
			            } else {
			            	echo '<script type="text/javascript">'; 
							echo 'alert("Error Connection!");'; 
							echo 'window.location.href = "manacc.php";';
						}
			            mysqli_close($connect);


?>