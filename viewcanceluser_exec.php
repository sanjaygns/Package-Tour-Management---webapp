<?php
require_once('usercheck.php');
require_once('connection.php');
 $cid = $_SESSION['SESS_MEMBER_ID'];
 $bill = $_POST['bill'];
$pno = $_POST['pno']  ;
$pname = $_POST['pname']  ;
$seats = $_POST['seats'];
$packageseats = $_POST['seats123'];
$amt = $_POST['amt']; 
 $actual =  $packageseats   -  $seats;
 $_SESSION['pname']=$pname;
 $_SESSION['seats123']=$seats;
 $_SESSION['amt']=$amt;
  $_SESSION['billno']=$bill;
 $amt = $amt * 0.1;
 $one = 1;
 
 
$q = "update books set cancel = '$one', booking_date = NOW() where  bill_no = '$bill' and p_no = '$pno' and customer_id = '$cid'";
mysql_query($q);
$q1 = "update payment set amount  = '$amt' WHERE  bill_no = '$bill' ";
$r = mysql_query($q1);
if($r)
{
			$qry="update  package set seats_booked = '$actual' where p_no = '$pno'";
			mysql_query($qry);
			
			 $sub="Cancel Information ";
	$email = $SESSION['email'];
	$feedback = "SS package tours :"."you have cancelled ".$pname." today and have received the receipt. Please come with the receipt within 3 days ". "\nRegards,\nAdmin";
 	
        $from = "admin@packagetours.net46.net";
	$head = "From:" . $from;
	$message="$feedback";
	mail($email,$sub,$message,$head);
						?>
  						<script type="text/javascript">
    					if(!alert("Successfully cancelled : redirectring to report generator.")) {
																					var url= 'cancelbookreport.php';
																					var win =window.open(url,'_newtab');
																				 document.location = 'home.php';
															        					}
						</script>
						<?php


}

else
{
		?>
		<script>
		if(!alert("could not cancel!!")) document.location = "viewbookingsuser.php"
		</script>
		<?php

}


?>