<?php

require_once ('admincheck.php');
	

?>
<html><title>Add Sub-locations</title><style type="text/css">
<!--
body {
	background-color: #66FF66;
}
-->
</style>
<body>
<script>
fields1 = 0;
fields2 = 0;



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

var a=document.forms["addsublocations"]["subl_name"].value;
var b=document.forms["addsublocations"]["description"].value;
var c=document.forms["addsublocations"]["starttime"].value;
var d=document.forms["addsublocations"]["endtime"].value;
var e=document.forms["addsublocations"]["from"].value;
var f=document.forms["addsublocations"]["distance"].value;

var b1=new Date(document.forms["addsublocations"]["starttime"].value);
var c1=new Date(document.forms["addsublocations"]["endtime"].value);
var today = new Date();
var future = new Date("December 17, 2020 03:24:00");

 if (a==null || a=="")
  {
  alert("sub-location name must be filled out");
  return false;
  }

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
    { k=document.forms["addsublocations"]["foodhotel"].value;
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


}
</script>


    <div align="center">
      <p><img src="index_files/1.jpg" width="700" height="210" /></p>
      <p>&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;Add Sub-Places &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;</p>
      <p>&nbsp;</p>
      <p>&nbsp;      </p>
</div>
    <form name="addsublocations"  onSubmit="return validateForm()" action="addsubplaces_exec.php" method="post">
    <table width="562" border="0" align="center" cellpadding="2" cellspacing="5">
    <tr>
    <td colspan="2">
    <!--the code bellow is used to display the message of the input validation-->   </td>
    </tr>
    <tr>
    <td width="305"><div align="right">Sub-Place Name  : </div></td>
    <td width="234"><input name="subl_name" type="text" /></td>
    </tr>
	 <tr>
    <td><div align="right">Description  : </div></td>
    <td><textarea name="description" id="description"></textarea></td>
    </tr>
	 <tr>
    <td><div align="right">Start Time  : </div></td>
    <td><p>
      <input name="starttime" type="datetime-local" />
    </p>      </td>
    </tr>
	 <tr>
    <td><div align="right">End Time  : </div></td>
    <td><p>
      <input name="endtime" type="datetime-local" />
    </p>
      </td>
    </tr>
      <tr>
    <td><div align="right">From   : </div></td>
    <td><p>
      <input name="from" type="text" />
    </p>
      </td>
    </tr>
	 <tr>
    <td><div align="right">Distance  : </div></td>
    <td><p>
      <input name="distance" type="text" />
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

    </div>
      <p>
        <label>
	 <?php
	
	?>
          <input name="Lodging" type="button" onClick="addInput2()" id="Lodging" value="Lodging">
          </label>
        </p>
		<div id="text2">

      </div>
   </td>
    </tr>
   
 <tr>
    <td><div align="right">Next : </div></td>
    <td><p>
      <label>
      <select name="select">
        <option>Add New Sublocation</option>
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