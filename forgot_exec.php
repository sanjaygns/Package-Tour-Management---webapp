<html>
<body>


<?php
session_start();

 require_once('connection.php');
  //Create query
        $a=$_POST["userid"];
    
 

 
	
	$que = "SELECT * FROM customer WHERE c_id='$a'";

	$resu = mysql_query($que);
	
	$row = mysql_fetch_array($resu);
//	echo $row['first_name'] . "____" . $row['password'] . "____ " . ;    
	$_SESSION['cid1'] = $row['c_id'];
	
//email
        $sub="Customer Details ";
	$email = $row['email_id'];
	$feedback = "SS package tours :  your User-Id and password is : ".$row['c_id']." and ".$row['password']. "\nRegards,\nAdmin";
 	
        $from = "admin@packagetours.net46.net";
	$head = "From:" . $from;
	$message="$feedback";
	mail($email,$sub,$message,$head);
	echo "Redirecting to login page"; 
?>	 
  <script type="text/javascript">
    if(!alert("Redirecting to report")) {
    																		var url= 'forgotpassreport.php';
																		var win =window.open(url,'_newtab');
																			//win.focus;

    																		document.location = 'login.php';
																		}

</script>
<?php
	

?>
</body>
</html>