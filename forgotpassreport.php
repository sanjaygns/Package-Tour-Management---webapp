<html><title>User Information</title><style type="text/css">
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
<body>



<?php
session_start();
$cid=$_SESSION['cid1'];
//echo $cid."sanj";
include('connection.php');
$qry= "select * from customer where c_id='$cid'";
$res = mysql_query($qry);
if(!$res)
{
}
$r = mysql_num_rows($res);
if($r <1)
{
}
$r = mysql_fetch_array($res);


?>


    <div align="center">
      <p><img src="index_files/1.jpg" width="574" height="160" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;Acknologment of Signup &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>________________________________________________________________________________________________________________________________________ </p>
</div>
    
    <table width="688" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td width="335"><div align="right">Customer ID : </div></td>
    <td width="330"> <div align="left"><?php echo $r['c_id']; ?></div></td>
    </tr>
	<tr>
    <td><div align="right">First Name : </div></td>
    <td><div align="left"><?php echo $r['first_name']; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Last Name : </div></td>
    <td><div align="left"><?php echo $r['last_name']; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Email Id : </div></td>
    <td><div align="left"><?php echo $r['email_id']; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Password : </div></td>
    <td><div align="left"><?php echo $r['password']; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Street : </div></td>
    <td><div align="left"><?php echo $r['street']; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Locality : </div></td>
    <td><div align="left"><?php echo $r['locality']; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">City : </div></td>
    <td><div align="left"><?php echo $r['city']; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Pin: </div></td>
    <td><div align="left"><?php echo $r['pin']; ?></div></td>
    </tr>
	  <tr>
    <td><div align="right">Phone No : </div></td>
    <td><div align="left"><?php echo $r['Phoneno']; ?></div></td>
    </tr>
	 
    
</table>
 

    <p align="center">________________________________________________________________________________________________________________________________________</p>
    <p align="center"><span class="style1">. . . .. . .. . .. . . .. . . .. . . .. . . .. . . . .. . .. . . .. . .. . .. . . .. . . . .. </span>Regards, </p>
    <p align="center"> <span class="style1">. . . . . . . .. . . ... . . . . .. . . . . .. . . . . .. . . . .. . . . . . . . . . . . .. . . . . . .. . . . . . . . .</span>Admin, SS Package Tours</p>
    <p>&nbsp;</p>
</body>
</html>