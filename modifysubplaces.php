<?php
include('connection.php');
require('admincheck.php');
//session_start();
$p = $_SESSION['p_no'];
$a = $_SESSION['l_name'];
  $query = "SELECT DISTINCT place_name FROM subplaces WHERE p_no='$p' and l_name = '$a'";
$result = mysql_query($query);
if(mysql_num_rows($result)<0)
{
?>  <script type="text/javascript">
    if(!alert("Some error in database : please try again")) document.location = 'modifysubplaces.php';

  </script><?php
}
else if (mysql_num_rows($result) == 0){

?>  <script type="text/javascript">
    if(!alert("No subplace!! redirecting to add new subplace")) document.location = 'addsubplaces.php';

  </script><?php


}


$dd="";


?>
<script>
function onClick()
{
var a=document.forms["createpackage"]["place_name"].value;

if(a == null || a == "")
{
	alert("select a subplace!!");
	return false;
}

}
</script>
<html><title>Modify Package</title><style type="text/css">
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
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;Modify Package &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  onSubmit = "return onclick()" action="modifyaddsubplaces.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">

    <tr>
    <td height="50"><div align="right">
      <label>place_name
      <select name="place_name" >
        <?php
	$dd = "";

//	$dd .= "<option value = '"."'>"."</option>";
	while ($row = mysql_fetch_array($result)) {
    $dd .=  " <option value='" . $row['place_name'] . "'>" . $row['place_name'] . "</option>";
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