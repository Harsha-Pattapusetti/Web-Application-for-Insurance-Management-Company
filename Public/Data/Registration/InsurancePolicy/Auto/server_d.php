 <?php

 session_start(); 
$vin=$_SESSION['vin'];

// initializing variables
$license_no = "";
$driver_fname = "";
$driver_lname = "";
$dob = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost", "root", "root@admin", "wds") ;
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// REGISTER DRIVER
if (isset($_POST['reg_driver'])) {
  // receive all input values from the form
  $license_no = $_POST['license_no'];
  $driver_fname =  $_POST['driver_fname'];
  $driver_lname =  $_POST['driver_lname'];
  $dob =  $_POST['dob'];
  
  $query = "INSERT INTO driver (license_no, driver_fname, driver_lname, dob, vin) 
  			VALUES('$license_no', '$driver_fname', '$driver_lname', '$dob', '$vin')";
  	mysqli_query($db, $query);
    header("Location:  modified1.php"); 
}

if (isset($_POST['edit_driver'])) {
  // receive all input values from the form
  $license_no = $_POST['license_no'];
  $driver_fname =  $_POST['driver_fname'];
  $driver_lname =  $_POST['driver_lname'];
  $dob =  $_POST['dob'];
  $did= $_POST['did'];

  $query = "UPDATE driver set license_no='$license_no', driver_fname='$driver_fname', driver_lname='$driver_lname', dob='$dob' where driver_no='$did'";

  	mysqli_query($db, $query);
    if (isset($_POST['edit_driver'])){
    header("Location: modified1.php");
	}
}

 ?> 