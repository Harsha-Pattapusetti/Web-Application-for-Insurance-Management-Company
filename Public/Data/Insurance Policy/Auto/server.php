
<?php

session_start();
// initializing variables
$fname = "";
$lname    = "";
$email    = "";
$gender = "";
$username = "";
$marital_status ="";
$address = "";
$city = "";
$state = "";
$zipcode ="";
$errors = array(); 
$fname = array_key_exists('fname', $_POST) ? $_POST['fname'] : "";
// connect to the database
$db = mysqli_connect("localhost", "root", "root@admin", "wds") ;
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
/* echo "Connected successfully";
 */
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($db,$_POST['fname']);
  $lname =  mysqli_real_escape_string($db,$_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $gender =  $_POST['gender'];
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $marital_status = $_POST['marital_status'];  
  $address = mysqli_real_escape_string($db,$_POST['address']);
  $city = mysqli_real_escape_string($db,$_POST['city']);
  $state =  mysqli_real_escape_string($db,$_POST['state']);
  $zipcode = $_POST['zipcode'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM customers WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");	
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO customers (fname, lname, email, gender, username, password, marital_status, address, city, state, zipcode) 
  			  VALUES('$fname', '$lname', '$email', '$gender','$username', '$password', '$marital_status', '$address','$city','$state','$zipcode')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "New user created successfully";
  	 header("Location:  index.php"); 
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM customers where username='$username' and password='$password'";
  	$result = mysqli_query($db, $query);
  	if (mysqli_num_rows($result) ==1) {
		$row = mysqli_fetch_object($result);
		if ($row->user_type=="user"){
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php');
		}
		else if($row->user_type=="admin"){
		$_SESSION['adminname'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: admin_1.php');
		}
		}
	}
	else {
  		array_push($errors, "Wrong username/password combination");
		}
	} 
  

$_SESSION['username']= $username;
?>