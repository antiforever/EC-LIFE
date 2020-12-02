<?php
session_start(); 

$mid2= $_GET['mid2'];



include('includes/conn.php');


$query ="UPDATE tbl_registration SET localfarmer='$mid2', uchoose='0' WHERE mid='".$_SESSION['mid']."'";

						if (mysqli_query($connect, $query)){

							$query1 ="UPDATE tbl_registration SET  uchoose='0' WHERE mid='$mid2'";

								if (mysqli_query($connect, $query1)){
			            			echo '<script type="text/javascript">'; 
									echo 'alert("LOCAL FARMER Saved successfully");'; 
									
		 							echo 'window.location.href = "dashboard.php";';
									echo '</script>';      
			            		} else {
			            		echo '<script type="text/javascript">'; 
								echo 'alert("Error Connection!");'; 
								echo 'window.location.href = "dashboard.php";';
								}
			            		mysqli_close($connect);
			            		
			            } else {
			            	echo '<script type="text/javascript">'; 
							echo 'alert("Error Connection!");'; 
							echo 'window.location.href = "dashboard.php";';
						}
			            mysqli_close($connect);






     				


?>