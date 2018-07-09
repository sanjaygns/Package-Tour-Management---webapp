    <?php
   //require_once('auth.php');
	session_start();	
	include('connection.php');
?> 

  
  
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0043)file:///C:/xampp/htdocs/package/package.htm -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="keywords" content="ss, packages, tour">
<meta name="description" content="Your Complete package tour Internet friend. Information about various package ">
<meta name="author" content="sspackage">
<title>Customers list</title>

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
.style10 {
	color: #000000;
	font-size: large;
}
.style12 {color: #FF0000}
.style16 {font-size: 36px}
.style17 {color: #66FF66}
.style18 {color: #66FF33}
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
 <h1><span class="style8"> 
   <?php  if (isset($_SESSION['SESS_FIRST_NAME'])){echo "Signed as  "." ". $_SESSION['SESS_FIRST_NAME']; echo " ";
   echo $_SESSION['SESS_LAST_NAME']; }?>
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
 if(isset($_SESSION['SESS_MEMBER_ID']))
		$cid=$_SESSION['SESS_MEMBER_ID'];

$qry= "select * from customer";
$res = mysql_query($qry);
if(!$res)
{
}
$r = mysql_num_rows($res);
if($r <1)
{
}
$sa=1;
?>
</p>


<div align="center"><span class="style10">Customers</span>
</div>
<span class="style12">_____________________________________________________________________________________________________________________________________________________________</span>
<p align="center" class="style11"> <span class="style16">|</span><span class="style17">. . . . . . ..</span> Customer Name<span class="style18">                     . . . . . . . </span><span class="style16">|</span><span class="style18">. . . .. . . .. . .</span>Customer-id<span class="style18"> . . . . . .. . </span><span class="style16">|</span></p>
<p align="center" class="style11"><span class="style12">_____________________________________________________________________________________________________________________________________________________________</span></p>
<?php 

while ($r = mysql_fetch_array($res))
{
?>
<table width="500" border="1" align="center">
  <tr>
    <td><span class="style11"><?php echo $sa.'. '.$r['first_name'] . " " . $r['last_name'] ; ?></span></td>
    <td><span class="style11"><?php echo $r['c_id']; ?></span></td>
  </tr>
</table>
</p>
<p><br />
  <?php $sa++;
}
?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
 <form name="createpackage"  onSubmit="return validateForm()" action="viewcustomer_exec.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td><div align="right">Enter Customer-id : </div></td>
    <td><input name="cid" type="text" /></td>
    </tr>
	 
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
</form>
</body>
</html>