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
.style1 {color: #FFFFFF}
-->
</style>
</head>
<body>



<?php
session_start();
include('connection.php');
$cname=$_SESSION['cname'];
$pname=$_SESSION['pname'];
$seats=$_SESSION['seats1'];
$amt= $_SESSION['fullamount'];
$addr=  $_SESSION['addr'];
$date= $_SESSION['date'];
$days = $_SESSION['days'];
$billno=$_SESSION['billno'];
$mode= $_SESSION['mode'];
?>


    <div align="center">
      <p><img src="index_files/1.jpg" width="574" height="160" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Acknologment of Booking &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
	  <p>Address: 561, 4 cross
				  Mahalakshmi layout
				  Bangalore - 560086</p>	
      <p>________________________________________________________________________________________________________________________________________ </p>
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
    <td><div align="right">Date of Dispach  : </div></td>
    <td><div align="left"><?php echo $date; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Total number of days  : </div></td>
    <td><div align="left"><?php echo $days; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Bill No : </div></td>
    <td><div align="left"><?php echo $billno; ?></div></td>
    </tr>
	
	  <tr>
    <td><div align="right">Payment Mode to be made on site : </div></td>
    <td><div align="left"><?php echo $mode; ?></div></td>
    </tr>
</table>
<p align="center">________________________________________________________________________________________________________________________________________</p>
    <p>&nbsp;</p>
    <p align="center"><span class="style1">. . . .. . .. . .. . . .. . . .. . . .. . . .. . . . .. . .. . . .. . .. . .. . . .. . . . .. </span>Regards, </p>
    <p align="center"> <span class="style1">. . . . . . . .. . . ... . . . . .. . . . . .. . . . . .. . . . .. . . . . . . . . . . . .. . . . . . .. . . . . . . . .</span>Admin, SS Package Tours</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
    <p align="center">_________________________________________________________________________________________________________________________________________</p>
    <p align="center">&nbsp;</p>
    <p align="center"> &#9618;&#9618; Detailed Schedule of Booked Package &#9618;&#9618; </p>
	
	 <?php

$qry = "select * from package where p_name = '$pname'";
$result1=mysql_query($qry);

$res = mysql_fetch_array($result1);
if(mysql_num_rows($result1)<1)
{

	//	 session_write_close();
	echo "not valid";

}

$b = $res['p_no'];
$_SESSION['p_no']=$b;
$_SESSION['totalseats'] =  $res['total_seats'];
$_SESSION['bookedseats'] =  $res['seats_booked'];
$_SESSION['amount'] =  $res['amount']
?>
<p align="left" class="style11">Package Name<?php echo " : ".$res['p_name']; ?> </p>
<p align="left" class="style11">Package Level<?php echo " : ".$res['level']; ?> </p>
<p align="left" class="style11">Total Seats<?php echo " : ".$res['total_seats']; ?> </p>
<p align="left" class="style11">Seats Booked<?php echo " : ".$res['seats_booked']; ?> </p>
<p align="left" class="style11">No of days<?php echo ": ".$res['no_of_days']; ?> </p>
<p align="left" class="style11">Departure Date<?php echo " : ".$res['dep_date']; ?> </p>
<p align="left" class="style11">Amount<?php echo " : ".$res['amount']; ?> </p>

			<p>_____________________________________________________________________________________________________________________________________________________________			</p>
			<p align="center">The Customers must be there at our office near Mahalakshmi Layout Bus-stand, 2 hrs before the first scheduled location time. we will reach the location from our office. </p>
			<p align="left" class="style11">
			  <?php

$loc=0;
$sub=0;
$query = "SELECT * FROM location WHERE p_no='$b' order by start_time";
$result1 = mysql_query($query);
if(mysql_num_rows($result1) >0)
{ 
			while($res1 = mysql_fetch_array($result1))
			{ ?>
			</p>
<p>_____________________________________________________________________________________________________________________________________________________________</p>
			<table width="158" height="50" border="1" align="center" cellpadding="25" bgcolor="#FFFF99">
              <tr>
                <td><?php echo "Location ".++$loc." "; ?></td>
              </tr>
</table>
			<p align="center">The location name is <?php echo "  ".$res1['l_name']; ?> you will reach the location at time <?php echo "  ".$res1['start_time']; ?> and leave the location after seeing all sublocation( if any ) at time <?php echo "  ".$res1['end_time']; ?> ,</p>
			<p align="center" class="style11"> we will take you to this location by means of <?php echo "  ".$res1['transport_means']; ?> </p>
			<?php
			
			
			$lname = $res1['l_name'];
			
			

 			$query = "SELECT * FROM subplaces WHERE p_no='$b' and l_name = '$lname' order by start_time";
			$result2 = mysql_query($query);

			if(mysql_num_rows($result2)>0)
			{
   				while($res2 = mysql_fetch_array($result2))
				{
				
						?>			_____________________________________________________________________________________________________________________________________________________________
			
			
			 <table width="168" height="50" border="1" align="center" cellpadding="25" bgcolor="#CCCCCC">
              <tr>
                <td width="110"><?php echo "sub-Location ".++$sub." "; ?></td>
              </tr>
            </table>
			<p align="center" class="style11">The Sub Location Name is <?php echo "  ".$res2['place_name']; ?> you will reach this sub-place from <?php echo "  ".$res2['from_place']; ?> by travelling   <?php echo "  ".$res2['distance']; ?> km , you will reach the sublocation at time <?php echo "  ".$res2['start_time']; ?> and depart from this at time <?php echo "  ".$res2['end_time']; ?> , </p>
			<p align="center" class="style11">Description of the sub-location is : <?php echo "  ".$res2['description']; ?> </p>
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
								?>	<p align="center" class="style10">You will be provided with <span class="style11"><?php echo "  ".$res4['type']; ?></span> at hotel <?php echo "  ".$res4['hotel']; ?> and the menus are 
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
											} 	?>
			  <?php echo "  ".$menu; ?> </p>
   								<div align="center">
   								  <?php
								}
		
						}


						$query = "select * from lodging where service_id = '$ser' ";
						$result = mysql_query($query);
						if(mysql_num_rows($result)>=1)
						{
									$lodging = 1;
									$res5 = mysql_fetch_array($result);?>
</div>
   								<p align="center" class="style10"> You will be provided with Lodging at  Hotel <?php echo "  ".$res5['hotel']; ?> </p>
										<p>
										  <?php
									
						}

                   }//while 
				   
			} $sub=0;
		}
   }//while1
   $loc=0;
} 
?>
</p>
										<p align="center">&nbsp;</p>
										<p align="center">&nbsp;</p>
										<p align="center">From the Last location, our office at Mahalakshmi Layout will be reached via the mentioned means of transport for the last location. </p>
										<p>&nbsp;</p>
</body>
</html>