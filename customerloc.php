<?php

?>
<html><title>Location</title><style type="text/css">
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
var c=document.forms["createpackage"]["location"].value;

 if (c==null || c=="")
  {
  alert("Location must be filled");
  return false;
  }
  
}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Location &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="createpackage"  onSubmit="return validateForm()" action="customerloc_exec.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td><div align="right">Location  : </div></td>
    <td><input name="location" type="text" /></td>
    </tr>
	 
    <tr>
    <td height="50"><div align="right"></div></td>
    <td><input name="" type="submit" value="Proceed" /></td>
    </tr>
    </table>
    </form>

</body>
</html>