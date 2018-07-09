<?php

require_once ('admincheck.php');
$p = $_SESSION['p_no'];
//echo $_POST['select'];
//$gg=$_POST['select'];
$fields1 = 0;
$fields2 = 0;
$_SESSION['food'] = $fields1;
$_SESSION['lodging'] = $fields2;
$menu = "";
 include('connection.php');
$abc =  $_POST['place_name'];
$cdf =  $_SESSION['l_name'];
  $_SESSION['place_name'] = $abc;
  $data = "select * from subplaces where place_name = '$abc' and p_no = '$p' and l_name = '$cdf'";
  
  $query = mysql_query($data);
  if(mysql_num_rows($query) < 1)
{?>
<script type="text/javascript">
    if(!alert("No subplace!")) document.location = 'addsubplaces.php';
    
  </script> <?php
}
  
  
  $data2 = mysql_fetch_array($query);
  $data = "select * from service where p_no = '$p' and l_name = '$abc'";
   $query = mysql_query($data);
   if($query)
   {
   $data3 = mysql_fetch_array($query);
   }
	if(isset($data3['service_id']))
	{
		$df = $data3['service_id'];
		$data = "select * from food where service_id = '$df'";
     
		$query = mysql_query($data);
		
		$data4 = mysql_fetch_array($query);
		if(mysql_num_rows($query)>0)
		{
			$fields1 = 1;
			$_SESSION['food'] = $fields1;
			$data = "select * from menu where service_id = '$df'";
			
			$query = mysql_query($data);
			if($query)
			{
				$data5 = mysql_fetch_array($query);
				$menu = $data5['menu_item'];
				while ($data5 = mysql_fetch_array($query))
				{
					$menu .= ",".$data5['menu_item']; 
				}
			}
			
		}
		
		$data = "select * from lodging where service_id = '$df'";
     
		$query = mysql_query($data);
		if ($query)
		{
			$data5 = mysql_fetch_array($query);
			
			if(mysql_num_rows($query)>0)
			{
				$fields2 = 1;
				$_SESSION['lodging'] = $fields2;
			}	
		}
	}



 

?>
<html><title>Create New Package</title><style type="text/css">
<!--
body {
	background-color: #66FF66;
}
-->
</style>
<body>
<script>
fields1 = <?php echo json_encode($fields1);?>;
fields2 = <?php echo json_encode($fields2);?>;



    function addInput1()
 {
	
      if (fields1 < 1) {
	document.getElementById('text1').innerHTML += "HotelName<input name='foodhotel' type='text' value='' /> FoodType <input name='type' type='text' value='' />Menus<textarea name='menuitems' id='menuitems'></textarea>";
	fields1 += 1;
	
	}
	 else
	 {
	
	alert("only one Food entry can be done");
	

	}
}
function addInput2() {

if (fields2 < 1) {
document.getElementById('text2').innerHTML += "HotelName<input name='lodginghotel' type='text' value='' /><br />";
fields2 += 1;

}
 else {

alert("Only one field of lodging has to be entered");

}
}
function validateForm()
{

var b=document.forms["addsublocations"]["description"].value;
var c=document.forms["addsublocations"]["starttime"].value;
var d=document.forms["addsublocations"]["endtime"].value;
var e=document.forms["addsublocations"]["from"].value;
var f=document.forms["addsublocations"]["distance"].value;
var b1=new Date(document.forms["addsublocations"]["starttime"].value);
var c1=new Date(document.forms["addsublocations"]["endtime"].value);
var today = new Date();
var future = new Date("December 17, 2020 03:24:00");


 
  if (b==null || b=="")
  {
  alert("description must be filled out");
  return false;
  }
  
  if(c == null || c =="" || d == null || d == ''||d.valueOf() < c.valueOf() || d.valueOf() == c.valueOf() && d.getTime() <= c.getTime()) 
   {
  	alert("Proper datetime  must be filled out");
  	return false;
  }
  if (e==null || e=="")
  {
  alert("From-location must be filled out");
  return false;
  }
   if (f==null || f=="")
  {
  alert("Distance-from-location must be filled out");
  return false;
  }
   if (isNaN(f))
  {
  alert("Distance must be number");
  return false;
  }
  if(fields1==1 )
  
    {	
		k=document.forms["addsublocations"]["foodhotel"].value;
	   x=document.forms["addsublocations"]["type"].value;
      if(k==null || k=='' )
	  { alert("Hotel name for food must be filled out");
	    return false;
	  }
	  if(x==null || x=='' )
	  { alert("food type must be filled out");
	    return false;
	  }
	  if (x != "lunch" && x!= "dinner" && x!= "breakfast")
	  {
	  	alert("food type must be correct");
	    return false;
	  }
	}
  if(fields2==1 )
    { m=document.forms["addsublocations"]["lodginghotel"].value;
      if(m==null || m=='') 
	  { alert("lodging hotel name must be filled out");
	    return false;
	  }
	}
   if (b1-today<0)
  {
	
	alert("start Date must be later than the current date!");
  	return false;
  }
  if (b1-future>0)
  {
	
	alert("start Date must be within the limited date 2020 !");
  	return false;
  }
   if (c1-today<0)
  {
	
	alert("end Date must be later than the current date!");
  	return false;
  }
  if (c1-future>0)
  {
	
	alert(" end Date must be within the limited date 2020 !");
  	return false;
  }


}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;Modify Sub-Places &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="addsublocations"  onSubmit="return validateForm()" action="modifyaddsubplaces_exec.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->   </td>
    </tr>
   
	 <tr>
    <td><div align="right">Description  : </div></td>
    <td><textarea name="description" id="description" ><?php echo htmlspecialchars($data2['description']) ?></textarea></td>
    </tr>
	 <tr>
    <td><div align="right">Start Time  : </div></td>
    <td><p>
      <input name="starttime" type="text" value = "<?php echo $data2['start_time'] ;?>" />
    </p>      </td>
    </tr>
	 <tr>
    <td><div align="right">End Time  : </div></td>
    <td><p>
      <input name="endtime" type="text" value = "<?php echo $data2['end_time'] ;?>"/>
    </p>
      </td>
    </tr>
      <tr>
    <td><div align="right">From   : </div></td>
    <td><p>
      <input name="from" type="text" value = "<?php echo $data2['from_place'] ;?>"/>
    </p>
      </td>
    </tr>
	 <tr>
    <td><div align="right">Distance  : </div></td>
    <td><p>
      <input name="distance" type="text" value = "<?php echo $data2['distance'] ;?>"/>
    Km.</p>
      </td>
    </tr>
	 <tr>
       <td>&nbsp;</td>
       <td><p>
      <label>
       <?php
	?>
      <input name=" Food" type="button" onClick="addInput1()" id=" Food" value="Food">
      
	  
      </label>
    </p>
	<div id="text1">
			<script>
	
	        if (fields1 == 1) {
			
	document.getElementById('text1').innerHTML += "HotelName<input name='foodhotel' type='text' value='<?php echo $data4['hotel'] ;?>' /> FoodType <input name='type' type='text' value='<?php echo $data4['type'] ;?>' />Menus<textarea name='menuitems' id='menuitems' ><?php echo htmlspecialchars($menu,ENT_QUOTES,'UTF-8') ?></textarea>";
	fields1 += 1;
	
	}

	  </script>
    </div>
      <p>
        <label>
	 <?php
	
	?>
          <input name="Lodging" type="button" onClick="addInput2()" id="Lodging" value="Lodging">
          </label>
        </p>
		<div id="text2">
	<script>
		if (fields2 == 1) {
document.getElementById('text2').innerHTML += "HotelName<input name='lodginghotel' type='text' value = '<?php echo $data5['hotel'] ;?>' /><br />";
fields2 += 1;

}
	</script>
      </div>
   </td>
    </tr>
   
 <tr>
    <td><div align="right">Next : </div></td>
    <td><p>
      <label>
      <select name="select">
        <option selected>Modify Sublocation</option>
        <option>Modify Location</option>
        <option>Add new Sublocation</option>
        <option>Add new Location</option>
        <option>Finish</option>
      </select>
      </label>
    </p>
      </td>
    </tr>    <tr>
    <td height="50"><div align="right">&laquo;&laquo;&laquo;&laquo;</div></td>
    <td><input name="" type="submit" value="Proceed" />
    &raquo;&raquo;&raquo;</td>
    </tr>
    </table>
    </form>

</body>
</html>