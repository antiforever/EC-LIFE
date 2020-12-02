<?php
session_start();
	$uname = $_POST["uname"];
	$upass = $_POST["dpass"];

include('includes/conn.php');


	//for account

	$sql = "SELECT * FROM tbl_registration WHERE muname='$uname' and mupass = '$upass'";

	$result = mysqli_query($connect, $sql);



				
			 if (mysqli_num_rows($result) > 0){

			 	while($row = mysqli_fetch_assoc($result)) {
            		$mid2 = $row['mid'];
            		$mname2=$row['mname'];
					$mtype2=$row['mtype']; 	
					$localfarmer2=$row['localfarmer']; 
					$uchoose2=$row['uchoose']; 

        		}



			 					echo '<script type="text/javascript">'; 
								echo 'alert("Welcome Member!");'; 
								echo 'window.location.href = "dashboard.php";';
								echo '</script>';

								session_start();
                                $_SESSION['mid'] = $mid2;
                                $_SESSION['mname'] = $mname2;
                                $_SESSION['mtype'] = $mtype2;
                                $_SESSION['localfarmer'] = $localfarmer2;
                                $_SESSION['uchoose'] = $uchoose2;

                                
								header('Location: dashboard.php');

			




			} else{
				echo '<script type="text/javascript">'; 
						echo 'alert("Incorrect Username OR This account is not yet registered");'; 
						echo 'window.location.href = "login.php";';
						echo '</script>';
        				}
        	mysqli_close($conn);
			
?>