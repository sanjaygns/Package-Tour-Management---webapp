<html>
<body>


<?php

require_once ('admincheck.php');
 require_once('connection.php');
  //Create query
     
        	$b=$_POST["starttime"];
	 $c=$_POST["endtime"];
	 $d=$_POST["transportmeans"];
	 $e= $_SESSION['p_no']; 
	 $a= $_SESSION['l_name'];
	
//	if($_SESSION['startdate'].valueOf() > $b || $_SESSION['enddate'].valueOf()  
        $qry="update  location set start_time = '$b',end_time = '$c',transport_means = '$d' where p_no = '$e' and l_name = '$a'";
    $result=mysql_query($qry);
    if($result)
	{
	
		
	
	 ?>
  <script type="text/javascript">
    if(!alert("Selected place is modified, modify more package details now.")) document.location = 'modifysubplaces.php';
    
  </script>
<?php
     
	
	}
else {
          ?>
  <script type="text/javascript">
    if(!alert("Some error in database : please try again")) document.location = 'modifyaddplaces.php';
    
  </script>
<?php
     }
?>
</body>
</html>