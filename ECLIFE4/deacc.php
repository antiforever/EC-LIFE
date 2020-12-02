<?php
session_start(); 

$deprel = $_GET['deprel'];
$depname = $_GET['depname'];
$perben = $_GET['perben'];





include('includes/conn.php');




$query ="INSERT INTO  tbl_depben(mid,deprel, depname,perben) VALUES('".$_SESSION['mid']."','$deprel','$depname','$perben')";




     					if (mysqli_query($connect, $query)){

			            		echo '<script type="text/javascript">'; 
								echo 'alert("New Dependent Add successfully");'; 
		 						echo 'window.location.href = "newdep.php";';
								echo '</script>';   
								       
			            } else {
			            	echo '<script type="text/javascript">'; 
							echo 'alert("Error Connection!");'; 
							echo 'window.location.href = "manacc.php";';
						}
			            mysqli_close($connect);


?>