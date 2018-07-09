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
<title>Package tour Homepage</title>

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
      <li class="current"><a href="home.php" class="parent"><span><font color="#0000FF">Home</font></span></a>      </li>
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




<?php

  //Create query
        $a=$_POST["p_name"];
		$zero = 0;
	//	echo $a;
	$qry = "select * from package where p_name = '$a'";	
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
			if(!alert("No such package ")) document.location = 'adminhome.php';
    
			</script> <?php
	}
$xyz = 	mysql_fetch_array($result1);
$pno = $xyz['p_no'];
$_SESSION['pno']=$pno;
$qry= "select * from books where p_no= '$pno' and cancel = '$zero'";
$res = mysql_query($qry);
if(!$res)
{
		
}
$r = mysql_num_rows($res);
if($r <1)
{
				?>
				</p>
				<script>
					if(!alert("no booking done!!")) document.location = "adminhome.php";
				</script>
				<?php	
	
}
?>
<p class="style10">Package Name    <span class="style11"> . .</span>:  	           <?php echo $xyz['p_name']; ?></p>
<p class="style10">Departure Date   <span class="style11"> . .</span>:  	           <?php echo $xyz['dep_date']; ?></p>
<p class="style10">Seats Booked    <span class="style11"> . .</span>:  	           <?php echo $xyz['seats_booked']; ?></p>
______________________________________________________________________________________________________________________________________________________

<?php
while ($r = mysql_fetch_array($res))
{

$pno = $r['p_no'];
$bill = $r['bill_no'];
$cid = $r['customer_id'];

$q = "select * from  customer where c_id = '$cid'";
$cust = mysql_query($q);
$customer = mysql_fetch_array($cust);
//echo $package['p_name'];
$q = $q = "select * from payment where bill_no = '$bill'";
$pay = mysql_query($q);
$payment = mysql_fetch_array($pay);

?>

<p class="style10">Customer Name    <span class="style11"> . ' .</span>:  	           <?php echo $customer['first_name']." ".$customer['last_name']; ?></p>
<p class="style10">Bill No         <span class="style11"> . . ..... ..  ....</span>:  	           <?php echo $r['bill_no']; ?></p>
<p class="style10">No of seats     <span class="style11">. . . .. '.</span>:                <?php echo $r['seats']; ?></p>
<p class="style10">Amount Paid     <span class="style11">. . .. .</span>:                <?php echo $payment['amount']; ?></p>
<p class="style10">Mode of payment<span class="style11">. </span>:  		       <?php echo $payment['payment_mode']; ?></p>
<p class="style10">Date of Booking <span class="style11"> . </span>:      <?php echo $r['booking_date']; ?></p>
  ______________________________________________________________________________________________________________________________________________________
<?php

}
?>
<form name="createpackage"  onSubmit="return validateForm()" action="viewbookingsadmincancel.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
      <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="cancel" type="submit" value="Cancel" /></td>
    </tr>
    </table>
</form>
<p>&nbsp; </p>
</body>
</html>
 

