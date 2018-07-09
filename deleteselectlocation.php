
<html><title>Delete Package</title><style type="text/css">
<!--
body {
background-color: #66FF66;
}
-->
</style>
<body>

<?php

require_once ('admincheck.php');
require_once('connection.php');
//Create query
$a=$_POST["p_name"];
$qry = "select * from package where p_name = '$a'";
$result1=mysql_query($qry);

$res = mysql_fetch_array($result1);
if(mysql_num_rows($result1)<1)
{

	//	 session_write_close();
	?>
  <script type="text/javascript">
    if(!(alert("couldn't find package name!!Try again!!"))) document.location = 'deletelocation.php';

</script>
	<?php


}

$b = $res['p_no'];
$_SESSION['p_no']=$b;


$query = "SELECT * FROM location WHERE p_no='$b'";
$result = mysql_query($query);
if(mysql_num_rows($result) <1)
{?>
<script type="text/javascript">
if(!alert("Currently Pacakge has empty location : please try again after adding location")) document.location = 'deletelocation.php';

  </script> <?php
}
$dd="";


?>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;Delete Package &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  action="deletelocation_exec.php" method="post">
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
</html>s