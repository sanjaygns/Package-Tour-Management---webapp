<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>Booking Cancel</title><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
body,td,th {
	color: #000000;
}
.style1 {color: #FFFFFF}
-->
</style>
</head>
<body>



<?php
session_start();

$cname=$_SESSION['SESS_FIRST_NAME'];
$pname=$_SESSION['pname'];
$seats=$_SESSION['seats123'];
$amt= $_SESSION['amt'];
$addr=  $_SESSION['addr'];
$billno=$_SESSION['billno'];

?>


    <div align="center">
      <p><img src="index_files/1.jpg" width="574" height="160" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Acknologment of Booking Cancellation &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
	  <p>Address: 561, 4 cross
				  Mahalakshmi Layout
				  Bangalore - 560086
				  </p>
      <p>________________________________________________________________________________________________________________________________________      </p>
</div>
    
    <table width="685" height="317" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td width="335"><div align="right">Customer Name : </div></td>
    <td width="330"> <div align="left"><?php echo $cname; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Package Name  : </div></td>
    <td><div align="left"><?php echo $pname; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Seats Booked  : </div></td>
    <td><div align="left"><?php echo $seats; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Amount Paid  : </div></td>
    <td><div align="left"><?php echo $amt; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Customer address  : </div></td>
    <td><div align="left"><?php echo $addr; ?></div></td>
    </tr>
	 
	  <tr>
    <td><div align="right">Bill No : </div></td>
    <td><div align="left"><?php echo $billno; ?></div></td>
    </tr>
	
	 
</table>
    <p align="center">________________________________________________________________________________________________________________________________________</p>
    <p align="center"> The amount paid will be refunded by deducting 10 percentage of the actual amount paid and this must be done at office only. The amount deducted is <?php echo ($amt*.1);?>. The amount refundable is <?php echo $amt; ?>  </p>
    <p>&nbsp;</p>
    <p align="center"> <span class="style1">. . . .. . .. . .. . . .. . . .. . . .. . . .. . . . .. . .. . . .. . .. . .. . . .. . . . .. </span>Regards, </p>
    <p align="center"> <span class="style1">. . . . . . . .. . . ... . . . . .. . . . . .. . . . . .. . . . .. . . . . . . . . . . . .. . . . . . .. . . . . . . . .</span>Admin, SS Package Tours</p>
</body>
</html>