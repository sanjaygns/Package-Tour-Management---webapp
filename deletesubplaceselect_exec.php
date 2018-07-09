<html>
<body>


<?php

require_once ('admincheck.php');
 require_once('connection.php');
  //Create query
      $a=$_POST['place_name'];
	$b=$_SESSION['p_no'];
	 $c = $_SESSION['l_name']; 
		$qry="DELETE FROM subplaces WHERE  p_no = '$b' and place_name='$a' and l_name = '$c'";
    $result=mysql_query($qry);
//echo "start".$d."end".$endDate;	

    if(!$result)
	{

 ?>
  <script type="text/javascript">
    if(!(alert("couldn't delete!!Try again!!"))) document.location = 'deletesubplaceselection.php';
    
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