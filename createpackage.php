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
var e=document.forms["createpackage"]["amount"].value;
var d1=new Date(document.forms["createpackage"]["dep_date"].value);
var today = new Date();
var future = new Date("December 17, 2020 03:24:00");

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
 
   if(d == null || d=="" ) 
   {
	
  	alert("Proper date  must be filled out");
  	return false;
  }
  
  
  if (d1-today<0)
  {
	
	alert("Date must be later than the current date!");
  	return false;
  }
  if (d1-future>0)
  {
	
	alert("Date must be within the limited date 2020 !");
  	return false;
  }

    if (e==null || e=="")
  {
  alert("Amount must be filled out");
  return false;
  }
  if (isNaN(e))
  {
  alert("Amount must be number like 1 / 2 / 3 / 4 etc...");
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
        <option>State Package</option>
        <option>National Package</option>
        <option>International Package</option>
		<option>Seasonal Package</option>
      </select>
    </label></td>
    </tr>
    <tr>
    <td><div align="right">Package Name  : </div></td>
    <td><input name="p_name" type="text" required/></td>
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
    <td><div align="right">Amount : </div></td>
    <td><input name="amount" type="text" /> 
    Rs. </td>
    </tr> 	
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
    </form>

</body>
</html>