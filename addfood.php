<?php
require_once ('admincheck.php');
?>
<html><title>Create New Package</title><style type="text/css">
<!--
body {
	background-color: #66FF66;
}
-->
</style>
<body>
<script>
function validateForm()
{
var a=document.forms["createpackage"]["totaldays"].value;
var b=document.forms["createpackage"]["totalseats"].value;
var c=document.forms["createpackage"]["p_name"].value;
var d=document.forms["createpackage"]["dep_date"].value;
 var currentDate = new Date()
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()

 if (c==null || c=="")
  {
  alert("Package name must be filled out");
  return false;
  }

  if (a==null || a=="")
  {
  alert("Total days must be filled out");
  return false;
  }
  if (b==null || b=="")
  {
  alert("Total seats must be filled out");
  return false;
  }
  if (isNaN(b))
  {
  alert("Total seats must be number like 1 / 2 / 3 / 4 etc...");
  return false;
  }
  if (isNaN(a))
  {
  alert("Total days must be number like 1 / 2 / 3 / 4 etc...");
  return false;
  }
   if (day<dep_date.getDate() && (month<dep_date.getMonth()+1) && year<dep_date.getFullYear)
  {
  alert("Please enter Future dates etc...");
  return false;
  }
  
  
}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Create New Package &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  onSubmit="return validateForm()" action="createpackage_exec.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->   </td>
    </tr>
    <tr>
    <td width="305"><div align="right">
      <label> Enter Level : </label>
    </div></td>
    <td width="234"><label>
      <select name="level">
        <option selected="selected">Local Package</option>
        <option>State level Package</option>
        <option>National level Package</option>
        <option>International Package</option>
      </select>
    </label></td>
    </tr>
    <tr>
    <td><div align="right">Package Name  : </div></td>
    <td><input name="p_name" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">Number of Days  : </div></td>
    <td><input name="totaldays" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">Maximum Seats : </div></td>
    <td><p>
      <input name="totalseats" type="text" />
    </p>
      </td>
    </tr>
	 <tr>
    <td><div align="right">Departure Date : </div></td>
    <td><input name="dep_date" type="date" /></td>
    </tr>
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
    </form>

</body>
</html>