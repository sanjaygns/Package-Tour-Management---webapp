<?php
require_once ('admincheck.php'); 
 require_once('connection.php');
 ?>
<html>
<body>

  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)file:///C:/xampp/htdocs/package/package.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="keywords" content="ss, packages, tour">
<meta name="description" content="Your Complete package tour Internet friend. Information about various package ">
<meta name="author" content="sspackage">
<title>Customers informatioin</title>

<link type="text/css" href="./index_files/menu.css" rel="stylesheet">
	<script src="./index_files/ga.js" async="" type="text/javascript"></script><script type="text/javascript" src="./index_files/jquery.js"></script>
	<script type="text/javascript" src="./index_files/menu.js"></script>
    

<style type="text/css">
body,td,th {
	color: #060;
	width: 1000px;
}
</style>
<style>
.fadein {
	position:relative;
	height:210px;
	width:700px;
	left: 0px;
	top: 0px;
	right: 0px;
	bottom: 0px;
	float: left;
}
.fadein img {
	position:absolute;
	left:0px;
	top:0px;
}

body {
	background-color: #99FF00;
}
.style1 {color: #3300FF}
.style2 {color: #0000FF}
.style3 {font-size: 14px}
.style8 {font-size: 12px}
.style10 {color: #000000}
.style11 {color: #99FF00}
</style>

<script>
$(function(){
	$('.fadein img:gt(0)').hide();
	setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>

<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body leftmargin="5" topmargin="5" class="BCdefultfont" marginheight="5" marginwidth="5">
<!--Container Start--->

 <div class="BClogo" id="logo">
  <div align="right">
    <p align="center"><img src="./index_files/Logo.png" alt="log" width="272" height="90" align="left"></p>
    <p><img src="./index_files/main-delimiter.png" alt="greenbar2" height="35" width="1000"></p>
  </div>
</div>
<!--Top ads Start---> 

<!--Top ads ends---> 
   
 <!--Welcometext Start--->  

 <div class="welcomtext" id="welcometext">
  <h2 align="center" class="style2">Welcome to SS PAckage Tour </h2>
  <h1 align="center"><strong>A Complete World of Packages all around the Golbe </strong></h1>
  <div align="right">
<h4><em>Life is Beautiful and Life in package tours is too Beautiful.</em></h4>
    <!--Time Start--->  

    <!--Time Ends---> 
</div>
</div>
 <!--Welcometext end--->  
<!--Menu Start--->
<div id="menu" style="y-index:300;margin-top:-2px;"><img src="./index_files/main-delimiter.png" alt="greenbar2" width="1000" height="5" align="baseline">
  <ul class="menu">
  <div align="left"></div>
      <li class="current"><a href="adminhome.php" class="parent"><span><font color="#0000FF">Home</font></span></a>      </li>
      <li><a href="file:///E:/web/link" class="parent style1"><span><font color="#0000FF">View Packages</font></span></a>
          <ul style="display: none; left: -2px; width: 163px; height: 120px; overflow: hidden;">
            <li><a href="localpackage.php"><span style="color: rgb(169, 169, 169);">Local Packages</span></a></li>
              <li><a href="statepackage.php"><span style="color: rgb(169, 169, 169);">State Packages</span></a></li>
              <li><a href="nationalpackage.php"><span style="color: rgb(169, 169, 169);">National Packages</span></a></li>
              <li><a href="internationalpackage.php"><span style="color: rgb(169, 169, 169);">International Packages</span></a></li>
              <li><a href="seasonalpackage.php"><span style="color: rgb(169, 169, 169);">Seasonal Packages</span></a></li>
          </ul>
    </li>
      
      <li style="left: 35px; width: 56px; display: block; overflow: hidden;" class="back"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px; display: block; overflow: hidden;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px; display: block;"><div class="left"></div></li></ul>
</div>
<div align="left">
  <p style="y-index:300;margin-top:-2px;">&nbsp;</p>
  <p style="y-index:300;margin-top:-2px;">&nbsp;</p>
  <p style="y-index:300;margin-top:-2px;"><img src="./index_files/main-delimiter.png" alt="greenbar2" width="1000" height="5" align="baseline"></p>
</div>




<p>
  <?php

  //Create query
        $a=$_POST["cid"];
	//	echo $a;
	$qry = "select * from customer where c_id = '$a'";	
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
	if(mysql_num_rows($result1) <1)
	{?>
  <script type="text/javascript">
			if(!alert("No such customer ")) document.location = 'adminhome.php';
    
			</script> 
  <?php
	}
$xyz = 	mysql_fetch_array($result1);
$zero = 0;
$one  = 1;
$qry = "select * from books where customer_id= '$a' and cancel = '$one'";
$r1 = mysql_query($qry);
$qry= "select * from books where customer_id= '$a' and cancel = '$zero'";
$res = mysql_query($qry);
if(!$res)
{
		
}
$r = mysql_num_rows($res);

?>
</p>
<table width="432" border="1">
  <tr>
    <td width="209"><span class="style10">First Name</span></td>
    <td width="207"><span class="style10"><?php echo $xyz['first_name']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Last Name</span></td>
    <td><span class="style10"><?php echo $xyz['last_name']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Email-ID</span></td>
    <td><span class="style10"><?php echo $xyz['email_id']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Street</span></td>
    <td><span class="style10"><?php echo $xyz['street']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Locality</span></td>
    <td><span class="style10"><?php echo $xyz['locality']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Pincode</span></td>
    <td><span class="style10"><?php echo $xyz['pin']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Phone-no</span></td>
    <td><span class="style10"><?php echo $xyz['Phoneno']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">city</span></td>
    <td><span class="style10"><?php echo $xyz['city']; ?></span></td>
  </tr>
</table>
<p>______________________________________________________________________________________________________________________________________________________
<p> <h3> Bookings </h3></p>
  <?php
if($r>=1)
{
while ($r = mysql_fetch_array($res))
{

$pno = $r['p_no'];
$bill = $r['bill_no'];


$q = "select * from  package where p_no = '$pno'";
$cust = mysql_query($q);
$package = mysql_fetch_array($cust);
//echo $package['p_name'];
$q = $q = "select * from payment where bill_no = '$bill'";
$pay = mysql_query($q);
$payment = mysql_fetch_array($pay);

?>
</p>
<table width="340" border="1">
  <tr>
    <td width="160"><span class="style10">Package Name</span></td>
    <td width="164"><span class="style10"><?php echo $package['p_name']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Package Level</span></td>
    <td><span class="style10"><?php echo $package['level']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Departure date</span></td>
    <td><span class="style10"><?php echo $package['dep_date']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Bill No</span></td>
    <td><span class="style10"><?php echo $r['bill_no']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">No of seats </span></td>
    <td><span class="style10"><?php echo $r['seats']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Amount Paid</span></td>
    <td><span class="style10"><?php echo $payment['amount']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Mode of payment</span></td>
    <td><span class="style10"><?php echo $payment['payment_mode']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Date of Booking</span></td>
    <td><span class="style10"><?php echo $r['booking_date']; ?></span></td>
  </tr>
</table>
<p>________________________________________________________________________________________________________________________________________________
  <?php

}
}

?>

______________________________________________________________________________________________________________________________________________________

  <?php
$r = mysql_num_rows($r1);  
if($r>=1)
{
?>
<p> <h3> Cancel Done </h3></p>
<?php	
while ($r = mysql_fetch_array($r1))
{

$pno = $r['p_no'];
$bill = $r['bill_no'];


$q = "select * from  package where p_no = '$pno'";
$cust = mysql_query($q);
$package = mysql_fetch_array($cust);
//echo $package['p_name'];
$q = $q = "select * from payment where bill_no = '$bill'";
$pay = mysql_query($q);
$payment = mysql_fetch_array($pay);

?>
</p>
<table width="340" border="1">
  <tr>
    <td width="160"><span class="style10">Package Name</span></td>
    <td width="164"><span class="style10"><?php echo $package['p_name']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Package Level</span></td>
    <td><span class="style10"><?php echo $package['level']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Departure date</span></td>
    <td><span class="style10"><?php echo $package['dep_date']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Bill No</span></td>
    <td><span class="style10"><?php echo $r['bill_no']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">No of seats </span></td>
    <td><span class="style10"><?php echo $r['seats']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Amount Paid</span></td>
    <td><span class="style10"><?php echo $payment['amount']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Mode of payment</span></td>
    <td><span class="style10"><?php echo $payment['payment_mode']; ?></span></td>
  </tr>
  <tr>
    <td><span class="style10">Date of Cancelling</span></td>
    <td><span class="style10"><?php echo $r['booking_date']; ?></span></td>
  </tr>
</table>
<p>________________________________________________________________________________________________________________________________________________
  <?php

}
}

?>


</p>
<p>&nbsp; </p>
</body>
</html>
 

