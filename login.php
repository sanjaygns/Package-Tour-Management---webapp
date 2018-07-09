    <?php
    //Start session
    session_start();
    //Unset the variables stored in session
    if(isset($_SESSION['SESS_MEMBER_ID']) && isset($_SESSION['SESS_FIRST_NAME']) && isset($_SESSION['SESS_LAST_NAME']) )
	{
		?>
		<script>
			
		if(!alert("already logged in ! logout first")) document.location = "home.php"
		</script>
		<?php
	}
	else if (isset($_SESSION['admin']))
	{
			?>
			<script>
			if(!alert("logged in as admin!!logout first")) document.location = "adminhome.php"	
			</script>	
			<?php
	}
	
	
	
       ?>
<html><title>User Login - Secured</title><style type="text/css">
<!--
body {
	background-color: #66FF66;
}
-->
</style>
<body>
    <div align="center"><img src="index_files/1.jpg" width="700" height="210" />
</div>
    <form name="loginform" action="login_exec.php" method="post">
    <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->
    <?php
    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
    echo '<ul class="err">';
    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
    echo '<li>',$msg,'</li>';
    }
    echo '</ul>';
    unset($_SESSION['ERRMSG_ARR']);
    }
    ?>
    </td>
    </tr>
    <tr>
    <td width="116"><div align="right">User_ID</div></td>
    <td width="177"><input name="username" type="text" /></td>
    </tr>
    <tr>
    <td><div align="right">Password</div></td>
    <td><input name="password" type="password" /></td>
    </tr>
    <tr>
    <td><div align="right"></div></td>
    <td><input name="" type="submit" value="login" /> 
      <a href="forgot.php">Forgot password</a>. </td>
    </tr>
    </table>
    </form>

</body>
</html>