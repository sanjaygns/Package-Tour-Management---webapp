<html>
<body>


<?php
require_once ('admincheck.php'); 
 require_once('connection.php');
  //Create query
        $a=$_POST["p_name"];
		
	$qry = "select * from package where p_name = '$a'";	
    $result1=mysql_query($qry);
	
	if(!$result1)
	{
//	session_start();
//	 session_write_close();
			?>
			<script type="text/javascript">
			if(!(alert("couldn't delete!!Try again!!"))) document.location = 'deletepackage.php';
    
			</script>
			<?php
     
	
	}
	if(mysql_num_rows($result1) <1)
{?>
<script type="text/javascript">
    if(!alert("No such package ")) document.location = 'deletepackage.php';
    
  </script> <?php
}
	$res = mysql_fetch_array($result1);
		$b = $res ['p_no'];
		$qry="DELETE FROM package WHERE  p_no = '$b'";
    $result=mysql_query($qry);
//echo "start".$d."end".$endDate;	
    if(!$result)
	{
//	session_start();
//	 session_write_close();
 ?>
  <script type="text/javascript">
    if(!(alert("couldn't delete!!Try again!!"))) document.location = 'deletepackage.php';
    
  </script>
<?php
     
	
	}
else {

          ?>
  <script type="text/javascript">
    if(!(alert("Succesfully Deleted!!"))) document.location = 'adminhome.php';
    
  </script>
<?php
     }
?>
</body>
</html>