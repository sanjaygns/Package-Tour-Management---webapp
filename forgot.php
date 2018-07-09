 
<html><title>User Login - Secured</title><style type="text/css">
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
var a=document.forms["forgot"]["userid"].value;


if (a==null || a=="" || a.length != 6)
  {
  alert("Valid 6 digit user-id  should be filled out");
  return false;
  }
  
}
</script>
    <div align="center"><img src="index_files/1.jpg" width="700" height="210" />
</div>
    <form name="forgot" action="forgot_exec.php" onsubmit="return validateForm()" method="post">
    <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->
      </td>
    </tr>
    <tr>
    <td width="116"><div align="right">Enter User_ID</div></td>
    <td width="177"><input name="userid" type="text" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="submit" type="submit" value="Go" /></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
    <td><a href="forgot.php"></a></td>
    </tr>
    </table>
    <p>&nbsp;</p>
    </form>

</body>
</html>