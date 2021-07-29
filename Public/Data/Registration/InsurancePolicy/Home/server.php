<?php

session_start();

$username=$_SESSION['username'];

// initializing variables
$purchase_date = "";
$pur_value   = "";
$area    = "";
$type_of_home = "";
$auto_fire_not = "";
$home_security ="";
$pool = "";
$basement = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost", "root", "root@admin", "wds") ;
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// REGISTER HOME
if (isset($_POST['reg_home'])) {
  // receive all input values from the form
  $purchase_date = $_POST['purchase_date'];
  $pur_value =  $_POST['pur_value'];
  $area =  $_POST['area'];
  $type_of_home =  $_POST['type_of_home'];
  $auto_fire_not = $_POST['auto_fire_not'];
  $home_security =  $_POST['home_security'];
  $pool =  $_POST['pool'];
  $basement =  $_POST['basement'];

  $query = "INSERT INTO home (purchase_date, pur_value, area, type_of_home, auto_fire_not, home_security, pool, basement,username) 
  			VALUES('$purchase_date', '$pur_value', '$area', '$type_of_home','$auto_fire_not', '$home_security', '$pool', '$basement','$username')";
  	mysqli_query($db, $query);
    header("Location:  modified1.php"); 
}

if (isset($_POST['edit_home'])) {
  // receive all input values from the form
  $purchase_date = $_POST['purchase_date'];
  $pur_value =  $_POST['pur_value'];
  $area =  $_POST['area'];
  $type_of_home =  $_POST['type_of_home'];
  $auto_fire_not = $_POST['auto_fire_not'];
  $home_security =  $_POST['home_security'];
  $pool =  $_POST['pool'];
  $basement =  $_POST['basement'];
  $hid= $_POST['hid'];

  $query = "UPDATE home set purchase_date='$purchase_date', pur_value='$pur_value', area='$area', type_of_home='$type_of_home', auto_fire_not='$auto_fire_not', home_security='$home_security', pool='$pool', basement='$basement' where home_no='$hid'";

  	mysqli_query($db, $query);
    if (isset($_POST['edit_home'])){
    header("Location: modified1.php");
	}
}

 ?> 