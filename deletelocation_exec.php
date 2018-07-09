<html>
<body>


<?php

require_once ('admincheck.php');
 require_once('connection.php');
  //Create query
      $a=$_POST['select'];
	   $b=$_SESSION['p_no'];
		$qry="DELETE FROM location WHERE  p_no = '$b' and l_name='$a'";
    $result=mysql_query($qry);
//echo "start".$d."end".$endDate;	

    if(!$result)
	{

 ?>
  <script type="text/javascript">
    if(!(alert("couldn't delete!!Try again!!"))) document.location = 'deletelocation.php';
    
  </script>
<?php
     
	
	}
else {

          ?>
  <script type="text/javascript">
    if(!(alert("Succesfully Deleted Location!!"))) document.location = 'adminhome.php';
    
  </script>
<?php
     }
?>
</body>
</html>