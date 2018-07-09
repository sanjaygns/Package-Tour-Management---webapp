<?php
require_once ('admincheck.php');
?>
<html><title>Add Location</title><style type="text/css">
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

var a=document.forms["addplaces"]["l_name"].value;
var b=document.forms["addplaces"]["starttime"].value;
var c=document.forms["addplaces"]["endtime"].value;
var d=document.forms["addplaces"]["transportmeans"].value;

var b1=new Date(document.forms["addplaces"]["starttime"].value);
var c1=new Date(document.forms["addplaces"]["endtime"].value);
var today = new Date();
var future = new Date("December 17, 2020 03:24:00");

 if (a==null || a=="")
  {
  alert("Location name must be filled out");
  return false;
  }

  if (a==null || a=="")
  {
  alert("Total days must be filled out");
  return false;
  }
  if (d==null || d=="")
  {
  alert("Transport means must be filled out");
  return false;
  }
  
  
  if(c == null || c =="" || b == null || b == ''||c.valueOf() < b.valueOf() || c.valueOf() == b.valueOf() && c.getTime() <= b.getTime()) 
   {
  	alert("Proper, valid datetime  must be filled out");
  	return false;
  }
   if (b1-today<0)
  {
	
	alert("start Date must be later than the current date!");
  	return false;
  }
  if (b1-future>0)
  {
	
	alert("start Date must be within the limited date 2020 !");
  	return false;
  }
   if (c1-today<0)
  {
	
	alert("end Date must be later than the current date!");
  	return false;
  }
  if (c1-future>0)
  {
	
	alert(" end Date must be within the limited date 2020 !");
  	return false;
  }
  
  
  
  
}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Add Place &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="addplaces"  onSubmit="return validateForm()" action="addplaces_exec.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->   </td>
    </tr>
    <tr>
    <td width="305"><div align="right">Location Name  : </div></td>
    <td width="234"><input name="l_name" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">Start Time : </div></td>
    <td><input name="starttime" type="datetime-local" /></td>
    </tr>
	 <tr>
    <td><div align="right">End time  : </div></td>
    <td><p>
      <input name="endtime" type="datetime-local" />
    </p>      </td>
    </tr>
	 <tr>
    <td><div align="right">Transport Means  : </div></td>
    <td><input name="transportmeans" type="text" /></td>
    </tr>
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
    </form>

</body>
</html>