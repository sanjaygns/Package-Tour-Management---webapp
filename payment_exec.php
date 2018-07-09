<html>
<body>


<?php

require_once('usercheck.php');
require_once('connection.php');
//Create query
$mode=$_POST["select"];
$_SESSION['mode']=$mode;

$amount = $_SESSION['fullamount'];
$qry="insert into payment (payment_mode,amount) values('$mode','$amount')";
$result=mysql_query($qry);
$seat=$_SESSION['seats1'];
$pno = $_SESSION['p_no'];
$cid = $_SESSION['SESS_MEMBER_ID'];
if($result)
{
		$bill = mysql_insert_id();
	   $_SESSION['billno']=$bill;
		$que = "insert into books (customer_id,p_no,bill_no,seats) values('$cid','$pno','$bill','$seat')";

		$resu = mysql_query($que);
			if ($resu)
    	{		$qry = "select * from package where p_no = '$pno'";
				$r = mysql_query($qry);
				$result = mysql_fetch_array($r);
		 $bookedseat = $result['seats_booked'];
		 $actual = $bookedseat + $seat;
				$_SESSION['date']=$result['dep_date'];
				$_SESSION['days']=$result['no_of_days'];


				$qry="update  package set seats_booked = '$actual' where p_no = '$pno'";
    			$res =   mysql_query($qry);
    			if($res)
    			{

    					$que = "SELECT * FROM customer WHERE c_id='$cid'";

    					$resu = mysql_query($que);

    					$row = mysql_fetch_array($resu);
    				  $_SESSION['cname']=$row['first_name'];
    				  $_SESSION['addr']=$row['street'].", ".$row['locality'].", ".$row['city'].", ".$row['pin'];
    				$quick = "select * from package where p_no = '$pno'";
					$quick1 = mysql_query($quick);
					$quick3 = mysql_fetch_array($quick1);
					$pname = $quick3['p_name'];
						$sub="Booking Information ";
	$email = $_SESSION['email'];
	echo $email;
	$feedback = "SS package tours :"."you have booked  ".$seat." seat for package " .$pname." today and have received the receipt. Please come with the receipt within 3 days for payment". "\nRegards,\nAdmin";
 	
        $from = "admin@packagetours.net46.net";
	$head = "From:" . $from;
	$message="$feedback";
	mail($email,$sub,$message,$head);

					?>
  						<script type="text/javascript">
    					if(!alert("Booking has been done successfully : redirection to report generation")) {

																			var url= 'bookingreport.php';
																			var win =window.open(url,'_newtab');

																			 document.location = 'home.php';


																			}
						</script>
						<?php
    			  }



				   else
					{
						?>
  						<script type="text/javascript">
						if(!alert("This email <?php echo $email; ?> is already registered. or database is not responding try again later ")) document.location = 'home.php';

  						</script>
						<?php
					 }
    	}
}
?>
</body>
</html>