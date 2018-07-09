<html><title>New User Signup</title><style type="text/css">
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
var a=document.forms["signupform"]["fname"].value;
var b=document.forms["signupform"]["lname"].value;
var c=document.forms["signupform"]["password"].value;
var d=document.forms["signupform"]["p1"].value;
var e=document.forms["signupform"]["phoneno"].value;
var f=document.forms["signupform"]["street"].value;
var g=document.forms["signupform"]["locality"].value;
var h=document.forms["signupform"]["city"].value;
var i=document.forms["signupform"]["pin"].value;
var j=document.forms["signupform"]["emailid"].value;

if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
  if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
  if (j==null || j=="")
  {
  alert("Email id must be filled out");
  return false;
  }
  if (c==null || c=="" || d==null || d=="")
  {
  alert("password must be filled out");
  return false;
  }
  if (!c.match(d))
  {
  alert(" Password re-entered Missmatch ");
  return false;
  }
  if (e==null || e=="" || e.length!=10)
  {
  alert("valid 10 digit mobile number must be filled out");
  return false;
  }
  if (f==null || f=="")
  {
  alert("street must be filled out");
  return false;
  }
  if (g==null || g=="")
  {
  alert("Locality name must be filled out");
  return false;
  }
  if (h==null || h=="")
  {
  alert("City name must be filled out");
  return false;
  }
  if (i==null || i=="" || i.length !=6)
  {
  alert("Valid 6 digit Pin code must be filled out");
  return false;
  }
  
}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619; Wellcome to SS Package Tours &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&laquo;&laquo; Enter your exact details for convinence of both of us &raquo;&raquo; </p>
      <p>&nbsp;      </p>
</div>
    <form name="signupform" action="signup_exec.php" onsubmit="return validateForm()" method="post">
    <table width="509" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->
   </td>
    </tr>
    <tr>
    <td width="300"><div align="right">First name: 
      <label>
      <select name="select" size="1">
        <option selected="selected">Mr.</option>
        <option>Ms.</option>
        <option>Mrs.</option>
      </select>
      </label>
    </div></td>
    <td width="177"><input name="fname" type="text" /></td>
    </tr>
    <tr>
    <td><div align="right">Last name: </div></td>
    <td><input name="lname" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">Email id: </div></td>
    <td><input name="emailid" type="email" /></td>
    </tr>
	 <tr>
    <td><div align="right">Choose password: </div></td>
    <td><input name="password" type="password" /></td>
    </tr>
	 <tr>
    <td><div align="right">Re-enter password: </div></td>
    <td><input name="p1" type="password" /></td>
    </tr>
	 <tr>
    <td><div align="right">Phone no: </div></td>
    <td><input name="phoneno" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">Address Street: </div></td>
    <td><input name="street" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">Locality: </div></td>
    <td><input name="locality" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">City: </div></td>
    <td><input name="city" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">Pin code: </div></td>
    <td><input name="pin" type="text" value="" /></td>
    </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="Signup " /></td>
    </tr>
    </table>
    </form>

</body>
</html>