<?php
require_once ('admincheck.php'); 
 require_once('connection.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Booking Information</title><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
body,td,th {
	color: #000000;
}
-->
</style>
</head>
<body>

<!--Container Start--->

  <div align="center">
      <p><img src="index_files/1.jpg" width="574" height="160" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;Todays Booking &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
	  <p>Address: 561, 4 cross
				  Mahalakshmi layout
				  Bangalore - 560086</p>	
      <p>________________________________________________________________________________________________________________________________________ </p>
</div>
    
<!--Top ads Start---> 

<!--Top ads ends---> 
   
 <!--Welcometext Start--->  

 


<?php
	$check1 = 0;
  //Create query
	$income = 0;
	$zero = 0;
	  $qur="select * from books WHERE DATE(booking_date) = CURDATE() and cancel = '$zero'";
	  $re1=mysql_query($qur);
		
	  if(mysql_num_rows($re1) < 1)
	  	  {
		  	$check = 1;	
	  	  }		
	  else
	  {
					?>
					<p> <h3 align="center"> Booking</h3>
					<p>
					  <?php
					while( $book=mysql_fetch_array($re1))
					{
	  
	  
					$a=$book["p_no"];
				//	echo $a;
					$qry = "select * from package where p_no = '$a'";	
					$result1=mysql_query($qry);
	
					if(!$result1)
					{
//	session_start();
//	 session_write_close();
							?>
                      <script type="text/javascript">
								if(!(alert("couldn't show!!Try again!!"))) document.location = 'adminhome.php';
    
								</script>
                      <?php
     
	
					}
	
					$xyz = 	mysql_fetch_array($result1);
					$pno = $xyz['p_name'];
					$cid = $book['customer_id'];

					$q = "select * from  customer where c_id = '$cid'";
					$cust = mysql_query($q);
					$customer = mysql_fetch_array($cust);
					$check  =  0;
					if($book['bill_no'] != null)
					{	$b = $book['bill_no'];
						$q = "select * from payment where bill_no = '$b'";
						$pa = mysql_query($q);
						$payment = mysql_fetch_array($pa);
						
						$amount = $payment['amount'];
						$income = $income + $amount;
						$mode = $payment['payment_mode'];
						$check = 1;
					}
//$_SESSION['pno']=$pno;
//$qry= "select * from customer where p_no= '$pno'";
//$res = mysql_query($qry);
//$r = mysql_num_rows($res);
					?>
</p>
					<table width="386" height="184" border="1" align="center">
                      <tr>
                        <td width="234"><strong>Package Name</strong></td>
                        <td width="136"><strong><?php echo $pno; ?></strong></td>
                      </tr>
                      <tr>
                        <td><strong>Departure Date</strong></td>
                        <td><strong><?php echo $xyz['dep_date']; ?></strong></td>
                      </tr>
                      <tr>
                        <td><strong>Seats Booked</strong></td>
                        <td><strong><?php echo $book['seats']; ?></strong></td>
                      </tr>
                      <tr>
                        <td><strong>Customer Name</strong></td>
                        <td><strong><?php echo $customer['first_name']+ " " +  $customer['last_name'];  ?></strong></td>
                      </tr>
                      <tr>
                        <td><strong>Amount Paid  </strong></td>
                        <td><strong><?php echo $amount; ?></strong></td>
                      </tr>
                      <tr>
                        <td><strong>payment mode</strong></td>
                        <td><strong><?php echo $mode; ?></strong></td>
                      </tr>
                    </table>
					<h3 align="center">________________________________________________________________________________________________________________________________________
					  <?php
}
}
?>

                      <?php
	$check2 = 0;
	$expense = 0;
  //Create query
		$one = 1;
		  $qur="select * from books WHERE DATE(booking_date) = CURDATE() and cancel = '$one'";
	  $re1=mysql_query($qur);
		
	  if(mysql_num_rows($re1) < 1)
	  	  {
			$check2 = 1;
			if($check1 == 1)
			{
		  		?>
			          <script type="text/javascript">
			if(!(alert("no bookings and cancelling have been done today!!"))) document.location = 'date.php';
    
			          </script>
			          <?php
			}	
	  	  }
	 else
	{	
	  ?>
	  </h3>
                    <p> <h3 align="center"> Cancelling </h3> </p>
	                <p>
	                  <?php
	  
	  while( $book=mysql_fetch_array($re1))
	  {
	  
	  
	    $a=$book["p_no"];
	//	echo $a;
	$qry = "select * from package where p_no = '$a'";	
    $result1=mysql_query($qry);
	
	if(!$result1)
	{
//	session_start();
//	 session_write_close();
			?>
	                          <script type="text/javascript">
			if(!(alert("couldn't show!!Try again!!"))) document.location = 'adminhome.php';
    
			        </script>
	                          <?php
     
	
	}
	
$xyz = 	mysql_fetch_array($result1);
$pno = $xyz['p_name'];
$cid = $book['customer_id'];

$q = "select * from  customer where c_id = '$cid'";
$cust = mysql_query($q);
$customer = mysql_fetch_array($cust);
$check  =  0;
if($book['bill_no'] != null)
{	$b = $book['bill_no'];
	$q = "select * from payment where bill_no = '$b'";
	$pa = mysql_query($q);
	$payment = mysql_fetch_array($pa);
	$amount = $payment['amount'];
	$expense = $expense + (10 * $amount) - $amount;
	$mode = $payment['payment_mode'];
	$check = 1;
}
//$_SESSION['pno']=$pno;
//$qry= "select * from customer where p_no= '$pno'";
//$res = mysql_query($qry);
//$r = mysql_num_rows($res);
?>
</p>
	                <table width="319" border="1" align="center">
                      <tr>
                        <td width="159"><strong>Package Name</strong></td>
                        <td width="144"><div align="left"><strong><?php echo $pno; ?></strong></div></td>
                      </tr>
                      <tr>
                        <td><strong>Departure Date</strong></td>
                        <td><div align="left"><strong><?php echo $xyz['dep_date']; ?></strong></div></td>
                      </tr>
                      <tr>
                        <td><strong>Seats Booked</strong></td>
                        <td><div align="left"><strong><?php echo $book['seats']; ?></strong></div></td>
                      </tr>
                      <tr>
                        <td><strong>Customer Name</strong></td>
                        <td><div align="left"><strong><?php echo $customer['first_name']. " " .  $customer['last_name'];  ?></strong></div></td>
                      </tr>
                      <tr>
                        <td><strong>Amount Refunded  </strong></td>
                        <td><div align="left"><strong><?php echo (9* $amount); ?></strong></div></td>
                      </tr>
                      <tr>
                        <td><strong>payment mode</strong></td>
                        <td><div align="left"><strong><?php echo $mode; ?></strong></div></td>
                      </tr>
                    </table>
	                <p align="center">________________________________________________________________________________________________________________________________________
	                  <?php
}
}
if ($check1  == 0 && $check2 == 0)
{	
	$in = $income -  $expense;
	if ($in >= 0)
	{
		?>
		</p>
	                <p> <h4 align="center"><?php echo "The profit for the day is ". $in; ?></h4></p> 
		<?php
	}
	else
	{
		$in = -1 * $in;
		?>
		<p> <h4 align="center"><?php echo "The loss for the day is ". $in; ?></h4></p> 
		<?php
		
		
	}
	
	
}
else if ($check1  == 0 && $check2 == 1)
{
		?>
		<p> <h4 align="center"><?php echo "The profit for the day is ". $income; ?></h4></p> 
		<?php
		 
	
}
else if ($check1  == 1 && $check2 == 0)
{		
			?>
		<p> <h4 align="center"><?php echo "The loss for the day is ". $expense; ?></h4></p> 
		<?php
			
	
}

?>


<p>&nbsp; </p>
</body>
</html>
 

