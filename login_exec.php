    <?php
	 //Sanitize the POST values
	 session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $a=0;
   $_SESSION['admin']=0;
	$s1='admin';
	$s2= 'sspackagetours';

     if( $username == $s1 and $password== $s2)
     {
	 $a = 1;
		$_SESSION['admin'] = $a;

    ?>
  <script type="text/javascript">
    if(!alert("Wellcome admin : redirectring to admin area")) document.location = 'adminhome.php';
    exit();
  </script>
<?php

      }

else {

    //Start session


    //Include database connection details
    require_once('connection.php');

    //Array to store validation errors
    $errmsg_arr = array();
	 unset($_SESSION['admin']);

    //Validation error flag
    $errflag = false;

    //Function to sanitize values received from the form. Prevents SQL injection
    function clean($str) {
    $str = @trim($str);
    if(get_magic_quotes_gpc()) {
    $str = stripslashes($str);
    }
    return mysql_real_escape_string($str);
    }



    //Input Validations
    if($username == '') {
    $errmsg_arr[] = 'User id missing';
    $errflag = true;
    }
    if($password == '') {
    $errmsg_arr[] = 'Password missing';
    $errflag = true;
    }

    //If there are input validations, redirect back to the login form
    if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    //session_write_close();
    header("location: login.php");
    exit();
    }
	if(isset($_SESSION['g'])) 
   {	unset($_SESSION['g']);	
   		?>
   		<script>
		 if(!alert("re-directing"))document.location = "book.php";
		 </script>
		 <?php
   }
    //Create query
    $qry="SELECT * FROM customer WHERE c_id='$username' AND password='$password'";
    $result=mysql_query($qry);

    //Check whether the query was successful or not
    if($result) {
    if(mysql_num_rows($result) > 0) {
    //Login Successful
    session_regenerate_id();
    $member = mysql_fetch_assoc($result);
    $_SESSION['SESS_MEMBER_ID'] = $member['c_id'];
    $_SESSION['SESS_FIRST_NAME'] = $member['first_name'];
    $_SESSION['SESS_LAST_NAME'] = $member['last_name'];
	$_SESSION['email'] = $member['email_id'];
    echo $_SESSION['SESS_MEMBER_ID'];
   echo $_SESSION['SESS_FIRST_NAME'];
   echo $_SESSION['SESS_LAST_NAME'];
//	 session_write_close();
   
   header("location: home.php");
    exit();
    }else {
    //Login failed
    $errmsg_arr[] = 'user id and password not found';
    $errflag = true;
    if($errflag) {
    $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
    session_write_close();
    header("location: login.php");
    exit();

    }
     }
    }
}
	 ?>