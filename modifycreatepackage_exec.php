<html>
<body>


<?php

require_once ('admincheck.php');  
 require_once('connection.php');
  //Create query
        $a=$_POST["p_name"];
        $b=$_POST["totalseats"];
	$c=$_POST["totaldays"];
	$d=$_POST["dep_date"];
	$e=$_POST["level"];
	$amount = $_POST["amount"];	
 $_SESSION['startdate'] = $d;
$startDate = $d; // 07/03/2011
$endDate = date("Y-m-d", strtotime($startDate ."+".$c." days"));
$p = $_SESSION['p_no'];
 $_SESSION['enddate'] = $endDate; 
    $qry="update  package set no_of_days = '$c',dep_date = '$d',total_seats = '$b',level = '$e',amount = '$amount' where p_no = '$p'";
    $result=mysql_query($qry);
//echo "start".$d."end".$endDate;	
    if($result)
	{
//	session_start();
    	 $qr="SELECT * FROM package WHERE p_name='$a' AND dep_date='$d'";
    $resul=mysql_query($qr);
     
    //Check whether the query was successful or not
    if($resul) {
    if(mysql_num_rows($resul) > 0) {
   
    //session_regenerate_id();
    $member = mysql_fetch_assoc($resul);
  //  $_SESSION['p_no'] = $member['p_no'];
    
//	 session_write_close();
 } }		
	
	 ?>
  <script type="text/javascript">
    if(!alert("Selected package is modified, modify further package details now.")) document.location = 'modifylocation.php';
    
  </script>
<?php
     
	
	}
else {
          ?>
  <script type="text/javascript">
    if(!alert("Some error in database : please try again")) document.location = 'modifycreatepackage.php';
    
  </script>
<?php
     }
?>
</body>
</html>