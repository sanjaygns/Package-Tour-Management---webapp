<html>
<body>


<?php

require_once ('admincheck.php');
 require_once('connection.php');
  //Create query
     	$c = $_SESSION['service'];
	$b = $_POST['service'];
		if ($b == "food")		
		{
		
		$q = "select * from lodging where service_id = '$c'";
				$r = mysql_query($q);
				
				if ( mysql_num_rows($r) < 1)
		{
			$qry="DELETE from service  WHERE  service_id = '$c'";
			$result = mysql_query($qry);
				if(!$result)
			{

			?>
			<script type="text/javascript">
			if(!(alert("in lodging couldn't delete!!Try again!!"))) document.location = 'deleteservice.php';
    
			</script>
			<?php
     
	
			}
			else 
			{

				?>
			<script type="text/javascript">
			if(!(alert("Succesfully Deleted Lodging!!"))) document.location = 'adminhome.php';
    
			</script>
			<?php
			}
		}
		else
		{
		$qry="DELETE FROM food WHERE  service_id = '$c'";		
		$result=mysql_query($qry);	
				if(!$result)
				{

			?>
			<script type="text/javascript">
			if(!(alert(" in food couldn't delete!!Try again!!"))) document.location = 'deleteservice.php';
    
			</script>
			<?php
     
	
				}
			else 
			{

				?>
				<script type="text/javascript">
				if(!(alert("Succesfully Deleted service!!"))) document.location = 'adminhome.php';
    
				</script>
				<?php
			}
		}
		}
		else if ($b == "lodging")
		{
				$q = "select * from food where service_id = '$c'";
				$r = mysql_query($q);
				echo mysql_num_rows($r);
				if ( mysql_num_rows($r) < 1)
		{
			$qry="DELETE from service  WHERE  service_id = '$c'";
			$result = mysql_query($qry);
																		if(!$result)
			{

			?>
			<script type="text/javascript">
			if(!(alert("in lodging couldn't delete!!Try again!!"))) document.location = 'deleteservice.php';
    
			</script>
			<?php
     
	
			}
			else 
			{

				?>
			<script type="text/javascript">
			if(!(alert("Succesfully Deleted Lodging!!"))) document.location = 'adminhome.php';
    
			</script>
			<?php
			}
		}
		else
		{
		$qry="DELETE FROM lodging WHERE  service_id = '$c'";
		 $result=mysql_query($qry);
				if(!$result)
			{

			?>
			<script type="text/javascript">
			if(!(alert("in lodging couldn't delete!!Try again!!"))) document.location = 'deleteservice.php';
    
			</script>
			<?php
     
	
			}
			else 
			{

				?>
			<script type="text/javascript">
			if(!(alert("Succesfully Deleted Lodging!!"))) document.location = 'adminhome.php';
    
			</script>
			<?php
			}
	}}
		else if ($b == "both")
		{
				
			if (!mysql_query("delete from service where service_id = '$c'"))
			{
					

			?>
			<script type="text/javascript">
			if(!(alert("in both couldn't delete!!Try again!!"))) document.location = 'deleteservice.php';
    
			</script>
			<?php
     
	
	}
	else 
	{

			?>
			<script type="text/javascript">
			if(!(alert("Succesfully Deleted Lodging!!"))) document.location = 'adminhome.php';
    
			</script>
			<?php
	}
			
			
		}
   
//echo "start".$d."end".$endDate;	

    
?>
</body>
</html>