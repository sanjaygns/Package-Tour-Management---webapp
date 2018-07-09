<html>
<body>


<?php


$ser;
require_once ('admincheck.php');
 require_once('connection.php');
  //Create query
     
       	$b=$_POST["description"];
	 $c=$_POST["starttime"];
	 $d=$_POST["endtime"];
	 $e=$_POST["from"];
	 $h=$_POST["distance"];
	 $f= $_SESSION['p_no'];  
	 $g= $_SESSION['l_name'];
	 $place = $_SESSION['place_name'];
	 $z = $_POST['select'];	
	 $food = $_SESSION['food'];
	 $lodging = $_SESSION['lodging'];
    $qry="update subplaces set start_time = '$c',end_time ='$d',from_place ='$e',distance = '$h',description = '$b' where p_no = '$f' and l_name = '$g' and place_name = '$place'";
    $result=mysql_query($qry);

    if(!$result)
	{
	    
          ?>
  <script type="text/javascript">
    if(!alert("1Some error in database : please try again")) document.location = 'modifyaddsubplaces_exec.php';

  </script>
<?php
     }
	 
if(isset($_POST['foodhotel']) || isset($_POST['lodginghotel']))
{	//echo "herenot!!";
	if($food == 0&& $lodging == 0)
	{
		$qry1="insert into service (p_no,l_name) values('$f','$place')";
			$result1=mysql_query($qry1);
			
			
		/*	if(!$result1)
			{
				?>
				<script type="text/javascript">
				if(!alert("2Some error in database : please try again")) document.location = 'modifyaddsubplaces_exec.php';

				</script>
				<?php
			}
			else
			{
				if(mysql_num_rows($result1)<0)
				{?>
						<script type="text/javascript">
							if(!alert("3Some error in database : please try again")) document.location = 'modifyaddsubplaces_exec.php';
    
							</script><?php
				}
*/
				$ser=mysql_insert_id();
				$_SESSION['ser'] = $ser;
				
	}
	if ($food==1 || $lodging==1)
	{
			
			$qry="select * from service where p_no = '$f' and l_name = '$place'";
				$result=mysql_query($qry);
				
				$s = mysql_fetch_array($result);
				$ser = $s['service_id'];
				$_SESSION['ser'] = $ser;
	}
	if(isset($_POST['foodhotel']))
	{
		//		$ser = $_SESSION['ser'];
				$h=$_POST["foodhotel"];
			$i=$_POST["type"];
			$j=$_POST["menuitems"];
		 $ser = $_SESSION['ser'];
			if($food == 0)
			{	
				$qry3="insert into food (service_id,type,hotel) values('$ser','$i','$h')";
				$result3=mysql_query($qry3);
				if(!$result3)
				{
					?>
					<script type="text/javascript">
					if(!alert("4Some error in database : please try again")) document.location = 'modifyaddsubplaces_exec.php';

					</script>
					<?php
				}
				
				$items = explode(",", $j);
				foreach($items as $key => $value)
				{
					$sql = "INSERT INTO menu (menu_item,service_id) values('{$value}','$ser')";
					mysql_query($sql);
					//echo "here4!!";
				}
				
			}
			else
			{		
					$qry="update food set hotel = '$h',type ='$i' where service_id = '$ser' ";
				$result=mysql_query($qry);
				
					if(!$result)
				{
					?>
					<script type="text/javascript">
					if(!alert("Some error in database : please try again")) document.location = 'modifyaddsubplaces_exec.php';

					</script>
					<?php
				}
				$q = "delete from menu where service_id = '$ser'";
				mysql_query($q);
				$items = explode(",", $j);
				foreach($items as $key => $value)
				{	
					$sql = "INSERT INTO menu (menu_item,service_id) values('{$value}','$ser')";
					mysql_query($sql);
					
				}
				
			}
				
	}	

		   
		
		
		
			if(isset($_POST['lodginghotel']))
			{	$ser = $_SESSION['ser'];
				$lod=$_POST["lodginghotel"];
				if($lodging == 1)
				{
					$qry="update lodging set hotel = '$lod' where service_id = '$ser' ";
					$result=mysql_query($qry);
				}
				else
				{
								$qry4="insert into lodging (service_id,hotel) values('$ser','$lod')";
								$result4=mysql_query($qry4);
						
				
				}

			}
}


if($z=="Add new Location")
{

?>
  <script type="text/javascript">
if(!alert("Add Location ")) document.location = 'addplaces.php';

  </script>
<?php
}
if($z=="Add new Sublocation")
{

?>
  <script type="text/javascript">
if(!alert("Add subplace")) document.location = 'addsubplaces.php';

  </script>
<?php
}
if($z=="Modify Sublocation")
{

?>
  <script type="text/javascript">
if(!alert("New subplace is added,selected to add another subplace")) document.location = 'modifysubplaces.php';

  </script>
<?php
}
if($z=="Modify Location")
{

	?>
  <script type="text/javascript">
if(!alert("New subplace is added,selected to add new Location")) document.location = 'modifylocation.php';

  </script>
	<?php
}
if($z=="Finish")
{

	?>
  <script type="text/javascript">
if(!alert("New subplace is added,   Finishing the Package Creation")) document.location = 'adminhome.php';

  </script>
	<?php
}


?>
</body>
</html>