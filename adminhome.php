<?php

require_once('admincheck.php');
?>
<html><title>Admin area</title><style type="text/css">
<!--
body {
	background-color: #66FF66;
}
.style2 {color: #66FF66}
.style3 {color: #66FF33}
-->
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<body>
    <div align="center"><img src="index_files/1.jpg" width="700" height="210" />
</div>
    <form name="loginform" action="login_exec.php" method="post">
      <div align="center">&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;
        Welcome    
   Admin 
   &#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;&#9619;
      </div>
    </form>

    <p align="center"><strong><span class="style3">.. . . . . . .. . . .. . . . .. . . .. . . . .. . . . .</span>Select your actions<span class="style3"> . . . . ... . . .. . . . .. . . ..  </span></strong><a href = "adminlogout.php">Admin logout</a></p>
	<form name="form1" method="post" action="">
      <label>
      <div align="center">
        <p>Create New Package <span class="style2"> . . . . .. .. 
        </span>
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button9','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF66','movie','button9' ); //end AC code
          </script>
          <noscript>
          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button9.swf">
            <param name="quality" value="high">
            <param name="bgcolor" value="#66FF66">
            <embed src="button9.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF66"></embed>
          </object>
          </noscript>
          <br>
          <br>
      Edit Existing Package 
      <span class="style3">. . . . .... 
      .</span>
      <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','name','Go','width','103','height','24','id','Go','title','.','src','button5','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF66','movie','button5' ); //end AC code
      </script>
      <noscript>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" name="Go" width="103" height="24" id="Go" title=".">
        <param name="movie" value="button5.swf">
        <param name="quality" value="high">
        <param name="bgcolor" value="#66FF66">
        <embed src="button5.swf" width="103" height="24" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" bgcolor="#66FF66" name="Go"></embed>
      </object>
      </noscript>
      <br>
      <br>
      <span class="style2">. . . . </span> Delete Package<span class="style2"> . . . .. ... ..</span>
      <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button6','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF66','movie','button6' ); //end AC code
      </script>
      <noscript>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
        <param name="movie" value="button6.swf">
        <param name="quality" value="high">
        <param name="bgcolor" value="#66FF66">
        <embed src="button6.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF66"></embed>
      </object>
      </noscript>
      </p>
        <p><span class="style3">. . .. . </span>Delete Location<span class="style2"> . . . . .. . .</span> 
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button10','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF33','movie','button10' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button10.swf">
            <param name="quality" value="high">
            <param name="bgcolor" value="#66FF33">
            <embed src="button10.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF33"></embed>
          </object></noscript>
        </p>
        <p><span class="style3">. . </span>Delete Sub-location<span class="style3">. .. . . .. . . 
          </span>
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button11','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF33','movie','button11' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button11.swf">
            <param name="quality" value="high">
            <param name="bgcolor" value="#66FF33">
            <embed src="button11.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF33"></embed>
          </object></noscript>
        </p>
        <p> <span class="style3">. . . ... </span>Delete Services<span class="style3"> . .. . . . . .
          </span>
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button12','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF33','movie','button12' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button12.swf">
            <param name="quality" value="high">
            <param name="bgcolor" value="#66FF33">
            <embed src="button12.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF33"></embed>
          </object></noscript>
          <br>
          <br>
          <span class="style3">. . . . . .</span>View Bookings<span class="style3">   ........... . .</span>
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button13','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF33','movie','button13' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button13.swf">
            <param name="quality" value="high">
            <param name="bgcolor" value="#66FF33">
            <embed src="button13.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF33"></embed>
          </object></noscript>
        </p>
        <p><span class="style3">...........</span>View Packages <span class="style3">.. . ...... . ..</span>
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button14','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF33','movie','button14' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button14.swf">
            <param name="quality" value="high">
            <param name="bgcolor" value="#66FF33">
            <embed src="button14.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF33"></embed>
          </object></noscript>
</p>
        <p><span class="style3">.... .  . .</span>Todays Bookings<span class="style3">... . . ... ...</span> 
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button15','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF66','movie','button15' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button15.swf">
            <param name="quality" value="high">
            <param name="bgcolor" value="#66FF66">
            <embed src="button15.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF66"></embed>
          </object></noscript>
        </p>
        <p><span class="style3">. . .  .. ..</span>View Customers<span class="style3">. . . .. . .. ..</span> 
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button16','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF66','movie','button16' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button16.swf">
            <param name="quality" value="high">
            <param name="bgcolor" value="#66FF66">
            <embed src="button16.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF66"></embed>
          </object></noscript>
        </p>
        <p><span class="style3"> .. . . ... .</span>View User Cancellation 
          <span class="style3">  . .. . .  . .. .</span>
          <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','103','height','24','src','button17','quality','high','pluginspage','http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash','bgcolor','#66FF66','movie','button17' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="103" height="24">
            <param name="movie" value="button17.swf">
            <param name="quality" value="high">
            <param name="bgcolor" value="#66FF66">
            <embed src="button17.swf" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="103" height="24" bgcolor="#66FF66"></embed>
          </object></noscript>
          <span class="style3"> .. . .. .</span><br>
          <br>
          <span class="style3">. .</span><br>
          <br>
        </p>
      </div>
      </label>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
</form>
    <p>&nbsp;</p>
</body>
</html>