<?php

session_start();
$username=$_SESSION['username'];

// initializing variables
$vin = "";
$model_year   = "";
$status    = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost", "root", "root@admin", "wds") ;
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


// REGISTER VEHICLE
if (isset($_POST['reg_auto'])) {
  // receive all input values from the form
  $vin = $_POST['vin'];
  $_SESSION['vin']=$vin;
  $model_year =  $_POST['model_year'];
  $status =  $_POST['status'];

  $query = "INSERT INTO auto (vin, model_year, status, username) 
  			VALUES('$vin', '$model_year', '$status', '$username')";
  	mysqli_query($db, $query);
    if (isset($_POST['reg_auto'])){
    header("Location: driver.php");
	}
}


if (isset($_POST['edit_auto'])) {
  // receive all input values from the form
  $vin = $_POST['vin'];
  $model_year =  $_POST['model_year'];
  $status =  $_POST['status'];
  $aid= $_POST['aid'];
  $_SESSION['aid']=$aid;

  $query = "UPDATE auto set vin='$vin', model_year='$model_year', status='$status' where auto_id='$aid'";

  	mysqli_query($db, $query);
    if (isset($_POST['edit_auto'])){
    header("Location: modified1.php");
	}
}


 ?> 