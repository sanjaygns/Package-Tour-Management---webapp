<html>
<body>


<?php
session_start();
require_once('connection.php');
//Create query
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["password"];
$d=$_POST["emailid"];
$e=$_POST["street"];
$f=$_POST["locality"];
$g=$_POST["city"];
$h=$_POST["pin"];
$i=$_POST["phoneno"];
$gender = $_POST['select'];

$a=$gender.' '.$a;
$qry="insert into customer (c_id,first_name,last_name,password,email_id,street,locality,city,pin,phoneno) values('','$a','$b','$c','$d','$e','$f','$g','$h','$i')";
$result=mysql_query($qry);

if($result)
{

	$que = "SELECT * FROM customer WHERE email_id='$d'";

	$resu = mysql_query($que);

	$row = mysql_fetch_array($resu);
//	echo $row['first_name'] . "____" . $row['last_name'] . "____ " . $row['c_id'];

	 $sub="Your Login Information ";
	$email = $row['email_id'];
	$feedback = "SS package tours :  your User-Id and password is : ".$row['c_id']." and ".$row['password']. "\nRegards,\nAdmin";
 	
        $from = "admin@packagetours.net46.net";
	$head = "From:" . $from;
	$message="$feedback";
	mail($email,$sub,$message,$head);
         $_SESSION['cid1']=$row['c_id'];


	?>
  <script type="text/javascript">
    if(!alert("Signup Successfull : redirecting to report generator .")) {
    																		var url= 'signupreport.php';
																		var win =window.open(url,'_newtab');
																			//win.focus;

    																		document.location = 'login.php';
																		}

</script>
	<?php


}
else {
	?>
  <script type="text/javascript">
if(!alert("This email <?php echo $_POST['emailid']; ?> is already registered. or database is not responding try again later ")) document.location = 'signup.php';

  </script>
	<?php
}
?>
</body>
</html>