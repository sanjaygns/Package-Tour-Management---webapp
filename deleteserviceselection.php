<?php
require_once ('admincheck.php');
include('connection.php');

$p = $_SESSION['p_no'];
$a = $_POST['place_name'];
$_SESSION['place_name'] = $a;
  $query = "SELECT  * FROM service WHERE p_no='$p' and l_name = '$a'";
$food = 0; $lodging = 0; 
$result = mysql_query($query);
if(mysql_num_rows($result)<1)
{
?>  <script type="text/javascript">
    if(!alert("NO service !!")) document.location = 'deleteservice.php';

  </script><?php
}
$s =mysql_fetch_array($result);
$ser = $s['service_id'];
// echo $ser = $s['service_id'];
$_SESSION['service'] = $ser;
$query1 = "select * from food where service_id = '$ser'";
$result = mysql_query($query1);
if(mysql_num_rows($result)>=1)
{
	$food = 1;
}


$query1 = "select * from lodging where service_id = '$ser' ";
$result = mysql_query($query1);
if(mysql_num_rows($result)>=1)
{
	$lodging = 1;
}
//echo $food.$lodging;

if ($food == 0 && $lodging == 0)
{
		?>  <script type="text/javascript">
    if(!alert("NO service !!")) document.location = 'deleteserviceloc.php';

  </script><?php
}
?>

<html><title>Delete Service</title><style type="text/css">
<!--
body {
	background-color: #66FF66;
}
.style1 {color: #66FF66}
-->
</style>
<body>
    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;Delete Service  &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  action="deleteservice_exec.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">

    <tr>
    <td height="50"><div align="right">
      <label>place_name
      <select name="service" >
        <?php
	$dd = "";
	
	if($food == 1) 
    $dd .=  " <option value='" . "food" . "'>" . "food" . "</option>";
	if($lodging == 1)
	$dd .=  " <option value='" . "lodging" . "'>" . "lodging" . "</option>";
	if($food == 1 && $lodging == 1)
	$dd .=  " <option value='" . "both" . "'>" . "both" . "</option>";
	echo $dd;?>
      </select>
      </label>
    </div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
    </form>

</body>
</html>