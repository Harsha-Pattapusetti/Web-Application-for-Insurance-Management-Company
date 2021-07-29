<?php

session_start();
$username=$_SESSION['username']; 

// initializing variables

$pay_amt   = "";
$pay_method    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost", "root", "root@admin", "wds") ;
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// REGISTER INSURANCE
if (isset($_POST['reg_payment'])) {
  // receive all input values from the form

  $pay_amt =  $_POST['pay_amt'];
  $pay_method =  $_POST['pay_method'];


  
  $query="INSERT INTO payments (pay_amt, pay_method, username) 
  			VALUES('$pay_amt', '$pay_method','$username')";
  mysqli_query($db, $query);
  header('location: display.php');
      
   
}

 ?> 