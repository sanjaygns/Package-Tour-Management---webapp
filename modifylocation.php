<?php
require_once ('admincheck.php');
include('connection.php');

$p = $_SESSION['p_no'];
  $query = "SELECT DISTINCT l_name FROM location WHERE p_no='$p'";
$result = mysql_query($query);
if(mysql_num_rows($result) <0)
{?>
<script type="text/javascript">
    if(!alert("Some error in database : please try again")) document.location = 'modifylocation.php';
    
  </script> <?php
}

if(mysql_num_rows($result) == 0)
{?>
<script type="text/javascript">
    if(!alert("No location : please try again")) document.location = 'addplaces.php';
    
  </script> <?php
}

$dd="";


?>

<html><title>Modify New Package</title><style type="text/css">
<!--
body {
	background-color: #66FF66;
}
-->
</style>
<body>
    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;Modify Package &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  action="modifyaddplaces.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    
    <tr>
    <td height="50"><div align="right">
      <label>Select
      <select name="select" >
        <?php
	$dd = "";
	
//	$dd .= "<option value = '"."'>"."</option>";
	while ($row = mysql_fetch_array($result)) {
    $dd .=  " <option value='" . $row['l_name'] . "'>" . $row['l_name'] . "</option>";
	}
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