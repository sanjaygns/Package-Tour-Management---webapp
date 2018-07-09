<html>
<body>


<?php

$ser;
require_once ('admincheck.php');
 require_once('connection.php');
  //Create query
        $a=$_POST["subl_name"];
        	$b=$_POST["description"];
	 $c=$_POST["starttime"];
	 $d=$_POST["endtime"];
	 $e=$_POST["from"];
	 $h=$_POST["distance"];
	 $f= $_SESSION['p_no'];  
	 $g= $_SESSION['l_name'];
	 $z = $_POST['select'];
    $qry="insert into subplaces (p_no,place_name,l_name,description,start_time,end_time,from_place,distance) values('$f','$a','$g','$b','$c','$d','$e','$h')";
    $result=mysql_query($qry) or die (mysql_error());


    if(!$result)
	{
          ?>
  <script type="text/javascript">
    if(!alert("Some error in database : please try again")) document.location = 'addsubplaces.php';
     
  </script>
<?php
     }
if(isset($_POST['foodhotel']) || isset($_POST['lodginghotel']))
{

		$qry1="insert into service (p_no,l_name) values('$f','$a')";
	$result1=mysql_query($qry1);

	if(!$result1)
	{
		?>
  <script type="text/javascript">
if(!alert("Some error in database : please try again")) document.location = 'addsubplaces.php';

</script>
		<?php
	}
		else
		{

			$ser=mysql_insert_id();

		 }


		   if(isset($_POST['foodhotel']))
		   {

		   	$h=$_POST["foodhotel"];
			$i=$_POST["type"];
			$j=$_POST["menuitems"];


		   	$qry3="insert into food (service_id,type,hotel) values('$ser','$i','$h')";
		   	$result3=mysql_query($qry3);
		   	if(!$result3)
		   	{
		   		?>
  <script type="text/javascript">
if(!alert("Some error in database : please try again")) document.location = 'addsubplaces.php';

</script>
		   		<?php
		   	}
		   	$items = explode(",", $j);
		   	foreach($items as $key => $value)
		   	{
		   		$sql = "INSERT INTO menu (menu_item,service_id) values('{$value}','$ser')";
		   		mysql_query($sql);
		   	}

		   }
			if(isset($_POST['lodginghotel']))
			{
				$lod=$_POST["lodginghotel"];
				$qry4="insert into lodging (service_id,hotel) values('$ser','$lod')";
				$result4=mysql_query($qry4);


						}
		}


if($z=="Add New Sublocation")
{

?>
  <script type="text/javascript">
if(!alert("New subplace is added,selected to add another subplace")) document.location = 'addsubplaces.php';

  </script>
<?php
}
if($z=="Add new Location")
{

	?>
  <script type="text/javascript">
if(!alert("New subplace is added,selected to add new Location")) document.location = 'addplaces.php';

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