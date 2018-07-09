<?php
require_once ('admincheck.php');
?>
<html><title>Delete Package</title><style type="text/css">
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
var c=document.forms["createpackage"]["p_name"].value;

 if (c==null || c=="")
  {
  alert("Package name must be filled out");
  return false;
  }
var y=window.confirm("You are about to delete Location in entered package name : Continue  ");
if(y)
 return true;
else return false;

  
}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Delete Package &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  onSubmit="return validateForm()" action="deleteselectlocation.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td><div align="right">Package Name  : </div></td>
    <td><input name="p_name" type="text" /></td>
    </tr>
	 
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
    </form>

</body>
</html>