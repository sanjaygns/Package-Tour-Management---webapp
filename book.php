    <?php
   //require_once('auth.php');
	session_start();	
	include('connection.php');
 
 
   ?>

<script>  
function validateForm()
{

var a=document.forms["createpackage"]["seats"].value;

if(a == null || a == "" || a == 0)
{
	alert("enter number of seats!!");
	return false;
}
if(isNaN(a))
{
	alert("number of seats must be a number!!");
	return false;
}
}
</script>
  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)file:///C:/xampp/htdocs/package/package.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="keywords" content="ss, packages, tour">
<meta name="description" content="Your Complete package tour Internet friend. Information about various package ">
<meta name="author" content="sspackage">
<title>Book Packages</title>

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
.style10 {
	color: #000000;
	font-size: large;
}
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
  <h1 align="center"><strong>A Complete World of Packages all around the Globe </strong></h1>
  <div align="right">
<h4><em>Life is Beautiful and Life in package tours is too Beautiful.</em></h4>
    <!--Time Start--->  
 <h1><span class="style8">
   <?php 
   if(isset($_SESSION['admin']))
   echo "welcome Admin";
   else if(isset($_SESSION['SESS_FIRST_NAME']))
   {
    echo "welcome ".$_SESSION['SESS_FIRST_NAME']; echo " ";
   echo $_SESSION['SESS_LAST_NAME'];
    } 
   else { echo "Wellcome Guest"; $_SESSION['g']=1; }
    ?>
	<!--Time Ends---> 
</div>
</div>
 <!--Welcometext end--->  
<!--Menu Start--->
<div id="menu" style="y-index:300;margin-top:-2px;"><img src="./index_files/main-delimiter.png" alt="greenbar2" width="1000" height="5" align="baseline">
  <ul class="menu">
  <div align="left"></div>
      <li class="current"><a href="file:///E:/web/localhost" class="parent"><span><font color="#0000FF"></font></span></a>      </li>
      <li><a href="file:///E:/web/link" class="parent style1"><span><font color="#0000FF">View Packages</font></span></a>
          <ul style="display: none; left: -2px; width: 163px; height: 120px; overflow: hidden;">
            <li><a href="localpackage.php"><span style="color: rgb(169, 169, 169);">Local Packages</span></a></li>
              <li><a href="statepackage.php"><span style="color: rgb(169, 169, 169);">State Packages</span></a></li>
              <li><a href="nationalpackage.php"><span style="color: rgb(169, 169, 169);">National Packages</span></a></li>
              <li><a href="internationalpackage.php"><span style="color: rgb(169, 169, 169);">International Packages</span></a></li>
              <li><a href="seasionalpackage.php"><span style="color: rgb(169, 169, 169);">Seasional Packages</span></a></li>
          </ul>
    </li>
    
      <li style="left: 35px; width: 56px; display: block; overflow: hidden;" class="back"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px; display: block; overflow: hidden;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px;"><div class="left"></div></li><li class="back" style="left: 35px; width: 56px; display: block;"><div class="left"></div></li></ul>
</div>
<div align="left">
  <p style="y-index:300;margin-top:-2px;">&nbsp;</p>
  <p style="y-index:300;margin-top:-2px;">&nbsp;</p>
  <p style="y-index:300;margin-top:-2px;"><img src="./index_files/main-delimiter.png" alt="greenbar2" width="1000" height="5" align="baseline"></p>
</div>
<div align="center"><span class="style10">Package Name: <?php echo $_POST['p_name']." ";?></span></div>

<p>

  <?php
$a=$_POST["p_name"];
$_SESSION['pname']=$a;
$qry = "select * from package where p_name = '$a'";
$result1=mysql_query($qry);

$res = mysql_fetch_array($result1);
if(mysql_num_rows($result1)<1)
{

	//	 session_write_close();
	?>
  <script type="text/javascript">
    if(!(alert("couldn't find package name!!Try again!!"))) document.location = 'home.php';

</script>
	<?php


}

$b = $res['p_no'];
$_SESSION['p_no']=$b;
$_SESSION['totalseats'] =  $res['total_seats'];
$_SESSION['bookedseats'] =  $res['seats_booked'];
$_SESSION['amount'] =  $res['amount']
?>
<p align="left" class="style11">Package Level<?php echo " : ".$res['level']; ?> </p>
<p align="left" class="style11">Total Seats<?php echo " : ".$res['total_seats']; ?> </p>
<p align="left" class="style11">Seats Booked<?php echo " : ".$res['seats_booked']; ?> </p>
<p align="left" class="style11">No of days<?php echo ": ".$res['no_of_days']; ?> </p>
<p align="left" class="style11">Departure Date<?php echo " : ".$res['dep_date']; ?> </p>
<p align="left" class="style11">Amount<?php echo " : ".$res['amount']; ?> </p>
<?php

$query = "SELECT * FROM location WHERE p_no='$b' order by start_time";
$result1 = mysql_query($query);
if(mysql_num_rows($result1) >0)
{ 
			while($res1 = mysql_fetch_array($result1))
			{ ?>
			_____________________________________________________________________________________________________________________________________________________________
			<p align="left" class="style11">Location Name<?php echo " : ".$res1['l_name']; ?> </p>
			<p align="left" class="style11">Start Time<?php echo " : ".$res1['start_time']; ?> </p>
			<p align="left" class="style11">End Time<?php echo " : ".$res1['end_time']; ?> </p>
			<p align="left" class="style11">Transport Means<?php echo " : ".$res1['transport_means']; ?> </p>
			
			<?php
			
			
			$lname = $res1['l_name'];
			
			

 			$query = "SELECT * FROM subplaces WHERE p_no='$b' and l_name = '$lname' order by start_time";
			$result2 = mysql_query($query);

			if(mysql_num_rows($result2)>0)
			{
   				while($res2 = mysql_fetch_array($result2))
				{
				
						?>			_____________________________________________________________________________________________________________________________________________________________
			<p align="left" class="style11">Sub Location Name<?php echo " : ".$res2['place_name']; ?> </p>
			<p align="left" class="style11">From<?php echo " : ".$res2['from_place']; ?> </p>
			<p align="left" class="style11">Distance<?php echo " : ".$res2['distance']; ?> </p>
			<p align="left" class="style11">Start Time<?php echo " : ".$res2['start_time']; ?> </p>
			<p align="left" class="style11">End time<?php echo " : ".$res2['end_time']; ?> </p>
			<p align="left" class="style11">Description<?php echo " : ".$res2['description']; ?> </p>

			<?php
				
   				$pname = $res2['place_name'];
  				$query = "SELECT  * FROM service WHERE p_no='$b' and l_name = '$pname'";
				$food = 0; $lodging = 0; 
				$result3 = mysql_query($query);
				if(mysql_num_rows($result3)>0)
				{
						$res3 = mysql_fetch_array($result3);
						
  						$ser = $res3['service_id'];
						$query = "select * from food where service_id = '$ser' ";
						$result4 = mysql_query($query);
						if(mysql_num_rows($result4)>=1)
						{
								$res4 = mysql_fetch_array($result4);
								?>	<p align="left" class="style10"> Food Service </p>
   								<p align="left" class="style11">Food Hotel <?php echo " : ".$res4['hotel']; ?> </p>
									<p align="left" class="style11">Food Type<?php echo " : ".$res4['type']; ?> </p>
								<?php

								
								
								
								$food = 1;
								$data = "select * from menu where service_id = '$ser'";
			
								$query = mysql_query($data);
								if($query)
								{
											$data5 = mysql_fetch_array($query);
											$menu = $data5['menu_item'];
											while ($data5 = mysql_fetch_array($query))
											{
														$menu .= ",".$data5['menu_item']; 
											} 	?><p align="left" class="style11">Menus <?php echo " : ".$menu; ?> </p><?php
								}
		
						}


						$query = "select * from lodging where service_id = '$ser' ";
						$result = mysql_query($query);
						if(mysql_num_rows($result)>=1)
						{
									$lodging = 1;
									$res5 = mysql_fetch_array($result);?>
									    <p align="left" class="style10"> Lodging Service </p>
										<p align="left" class="style11">Lodging Hotel <?php echo " : ".$res5['hotel']; ?> </p>
									<?php
									
						}

                   }//while
			}
		}
   }//while1
} 
?>
</p>



<?php if(!(isset($_SESSION['admin'])))
{
?>
</p>
     <form name="createpackage"  onSubmit="return validateForm()" action="payment.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td><div align="right"> Number of seats to Book:</div></td>
    <td><input name="seats" type="text" /></td>
    </tr>
	 
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="book" type="submit" value="Book" /></td>
    </tr>
    </table>
    </form>

<p>
<?php
}
?>
&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>