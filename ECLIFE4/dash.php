<?php
session_start();
	

include('includes/conn.php');


	//for choose farmer

	 $sql = "SELECT * FROM tbl_registration WHERE mid = '".$_SESSION['localfarmer']."'";
		$result = mysqli_query($connect, $sql);
			 if (mysqli_num_rows($result) > 0){
			 	while($row = mysqli_fetch_assoc($result)) {
            		$mid3 = $row['mid'];
            		$mname3=$row['mname'];
					$mtype3=$row['mtype']; 	
					$localfarmer3=$row['localfarmer']; 
					$uchoose3=$row['uchoose']; 
        		}




								session_start();
                                $_SESSION['mid'] = $mid3;
                                $_SESSION['mname'] = $mname3;
                                $_SESSION['mtype'] = $mtype3;
                                $_SESSION['localfarmer'] = $localfarmer3;
                                $_SESSION['uchoose'] = $uchoose3;

                                
								header('Location: dashboard.php');

			




			}
        	mysqli_close($connect);
			
?>

