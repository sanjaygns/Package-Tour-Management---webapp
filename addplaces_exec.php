<html>
<body>


<?php
require_once ('admincheck.php');

 require_once('connection.php');
  //Create query
      $a=$_POST["l_name"];
    	$b=$_POST["starttime"];
	 $c=$_POST["endtime"];
	 $d=$_POST["transportmeans"];
	$e= $_SESSION['p_no']; 
	$_SESSION['l_name']=$a;
	 
//	if($_SESSION['startdate'].valueOf() > $b || $_SESSION['enddate'].valueOf()  
    $qry="insert into location (l_name,start_time,end_time,transport_means,p_no) values('$a','$b','$c','$d','$e')";
    $result=mysql_query($qry);
	
    if($result)
	{
	
		
	
	 ?>
  <script type="text/javascript">
    if(!alert("New place is added, add more package details now.")) document.location = 'addsubplaces.php';
    
  </script>
<?php
     
	
	}
else {
          ?>
  <script type="text/javascript">
    if(!alert("Some error in database : already location is entered:  please try again")) document.location = 'addplaces.php';
    
  </script>
<?php
     }
?>
</body>
</html>