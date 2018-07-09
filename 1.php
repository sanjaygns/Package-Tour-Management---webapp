<?php

session_start();
require_once ('admincheck.php');
echo $p = $_SESSION['p_no'];
$fields1 = 0;
$fields2 = 0;
$menu = "";
include('connection.php');
$abc =  $_POST['place_name'];

echo $abc;
echo $cdf =  $_SESSION['l_name'];
$_SESSION['place_name'] = $abc;

$data = "select * from subplaces where p_no = '$p' and l_name='$cdf' and place_name='$abc'";
 echo $abc;
$query = mysql_query($data);

$data2 = mysql_fetch_array($query);
//$data2 = mysql_fetch_array($query);
print_r($data2);


?>