<?php

session_start();
$username=$_SESSION['username'];

// initializing variables
$type_of_insu = "";
$start_date   = "";
$end_date    = "";
$pr_amount = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("localhost", "root", "root@admin", "wds") ;
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// REGISTER INSURANCE
if (isset($_POST['reg_insurance'])) {
  // receive all input values from the form
  $type_of_insu = $_POST['type_of_insu'];
  $start_date =  $_POST['start_date'];
  $end_date =  $_POST['end_date'];
  $pr_amount =  $_POST['pr_amount'];

  
  $query="INSERT INTO insurance (type_of_insu, start_date, end_date, pr_amount, username) 
  			VALUES('$type_of_insu', '$start_date', '$end_date', '$pr_amount','$username')";
  mysqli_query($db, $query);
  
    if (isset($_POST["type_of_insu"])
    && $_POST["type_of_insu"] == "h") {
		header('location: home/home.php');
        //logic specific for Home
    } else if (isset($_POST["type_of_insu"])
    && $_POST["type_of_insu"] == "a") {
		header('location: auto/auto.php');
        //logic specific for Auto
    } else {
        //die or some kind of error handling can be done
    }
}

 ?> 
 
 <?php
 if (isset($_POST['edit_customers'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db,$_POST['fname']);
  $lname =  mysqli_real_escape_string($db,$_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gender =  $_POST['gender'];
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = $_POST['password'];
  $marital_status = $_POST['marital_status'];  
  $address = mysqli_real_escape_string($db,$_POST['address']);
  $city = mysqli_real_escape_string($db,$_POST['city']);
  $state =  mysqli_real_escape_string($db,$_POST['state']);
  $zipcode = $_POST['zipcode'];
  $c_id= $_POST['c_id'];

  $query = "UPDATE customers set fname='$fname', lname='$lname', email='$email', gender='$gender', username='$username', password='$password', marital_status='$marital_status', address='$address', city='$city' ,state='$state' ,zipcode='$zipcode' where c_id='$c_id'";

  	mysqli_query($db, $query);
    if (isset($_POST['edit_customers'])){
    header("Location: modified1.php");
	}
}
?>