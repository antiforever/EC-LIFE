<?php


$rnum1 = $_GET['rnum1'];
$acctype = $_GET['account'];
$fname = $_GET['fname'];
$cnum = $_GET['contnum'];
$add = $_GET['address'];
$uname= $_GET['uname'];
$dpass= $_GET['dpass'];
$cpass= $_GET['cpass'];

function RandomSourceCode() {
                                    
$var ="0123456789";
srand((double)microtime()*1000000);
$i = 0;
$rand_Code = '' ;
    while ($i <= 10) {
     $num = rand() % 10;
     $tmp = substr($var, $num, 1);
     $rand_Code = $rand_Code . $tmp;
     $i++;
     }
                                   
	return $rand_Code;

    }

 $vcode =  RandomSourceCode();




include('includes/conn.php');

if($acctype =="family"){


$query ="INSERT INTO  tbl_registration(mid,mname,mcont,madd,muname,mupass,mtype,mreferral) VALUES('$vcode','$fname', '$cnum', '$add', '$uname', '$dpass', '$acctype', '$rnum1')";




     					if (mysqli_query($connect, $query)){

			            		echo '<script type="text/javascript">'; 
								echo 'alert("Member Registration successfully");'; 
		 						echo 'window.location.href = "login.php";';
								echo '</script>';   
								       
			            } else {
			            	echo '<script type="text/javascript">'; 
							echo 'alert("Error Connection!");'; 
							echo 'window.location.href = "newaccount.php";';
						}
			            mysqli_close($connect);

} else {

$query ="INSERT INTO  tbl_registration(mid,mname,mcont,madd,muname,mupass,mtype,mreferral, uchoose) VALUES('$vcode','$fname', '$cnum', '$add', '$uname', '$dpass', '$acctype', '$rnum1', '1')";





     					if (mysqli_query($connect, $query)){
     						
			            		echo '<script type="text/javascript">'; 
								echo 'alert("Member Registration successfully");'; 
		 						echo 'window.location.href = "login.php";';
								echo '</script>'; 
							
			            } else {
			            	echo '<script type="text/javascript">'; 
							echo 'alert("Error Connection!");'; 
							echo 'window.location.href = "newaccount.php";';
						}
			            mysqli_close($connect);



}

?>