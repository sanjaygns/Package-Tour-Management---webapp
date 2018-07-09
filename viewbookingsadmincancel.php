<html>
<body>


<?php
require_once('admincheck.php');
require_once('connection.php');
$packageno = $_SESSION['pno'];
$q = "select * from books where p_no = '$packageno'";
$result1 = mysql_query($q);
$num = mysql_num_rows($result1);
if($num>0)
{ ?>
<p align="center"><img src="index_files/1.jpg" width="700" height="210" /></p>
<p align="center">&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Booking cancelled &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
<a href="adminhome.php">Home</a>
<?php
}
while($num>0)
{
	$books = mysql_fetch_array($result1);

	$bill = $books['bill_no'];
	$cid = $books['customer_id'];
    $q = "select * from payment where bill_no = '$bill'";
	$q = mysql_query($q);
	$pay = mysql_fetch_array($q);
	$amount  = $pay['amount'];
	$q = "delete from payment where bill_no = '$bill'";
	$r = mysql_query($q);
	if($r)
	{
						$q = "select * from customer where c_id = '$cid'";
						$result = mysql_query($q);

						$customer = mysql_fetch_array($result);
   						?> 

<p></p>
<table width="432" border="1" align="center">
  <tr>
    <td width="209"><span class="style10">First Name</span></td>
    <td width="207"><span class="style10"><?php echo $customer['first_name']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Last Name</span></td>
    <td><span class="style10"><?php echo $customer['last_name']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Email-ID</span></td>
    <td><span class="style10"><?php echo $customer['email_id']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Street</span></td>
    <td><span class="style10"><?php echo $customer['street']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Locality</span></td>
    <td><span class="style10"><?php echo $customer['locality']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Pincode</span></td>
    <td><span class="style10"><?php echo $customer['pin']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Phone-no</span></td>
    <td><span class="style10"><?php echo $customer['Phoneno']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">city</span></td>
    <td><span class="style10"><?php echo $customer['city']; ?></span></td>
  </tr>
</table>
<p>______________________________________________________________________________________________________________________________________________________</p>
<?php

					    $email = $customer['email_id'];
						$sub="Cancellation Of Booking ";

						$feedback = "Your Package has been Cancelled by admin \n"."Rs. ".$amount."  will be refunded\n\nRegards,\nAdmin";

						 $from = "admin@packagetours.net46.net";
						$head = "From:" . $from;
						$message="$feedback";
						mail($email,$sub,$message,$head);

	}


	else
	{
		?>
		                <script>
		if(!alert("could not cancel!!")) document.location = "viewbookingsadmin.php"
		</script>
		<?php

	}
	$num = $num - 1;
}

$actual = 0;
$qry="update  package set seats_booked = '$actual' where p_no = '$packageno'";
mysql_query($qry);
?>

<script>
		alert("Successfully cancelled!!Email has been sent to all related customers");
		</script>


</body>
</html>
