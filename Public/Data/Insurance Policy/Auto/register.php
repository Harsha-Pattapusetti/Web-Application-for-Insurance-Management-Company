<?php require_once('../../../PRIVATE/Initialize.php'); ?>
<?php include(DESIGN_PATH . '/header.php'); ?>


<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

  <center>
  <div class="header">
  	<h2>New Registration</h2>
  </div>
  <div id="content">
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<table>
    <tr>
    <td>First Name :</td>
    <td><input type="fname" name="fname" value="<?php echo $fname; ?>"></td>
    </tr>
	
	<tr>
    <td>Last Name :</td>
    <td><input type="lname" name="lname" value="<?php echo $lname; ?>"></td>
    </tr>
	
    
	<tr>
    <td>Email :</td>
    <td><input type="email" name="email" value="<?php echo $email; ?>" placeholder="example@xyz.com"></td>
    </tr>

    <tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="m" required>Male
     <input type="radio" name="gender" value="f" required>Female
	 <input type="radio" name="gender" value="o" required>Prefer not to say
    </td>
    </tr>
	
	<tr>
    <td>User Name :</td>
    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
    </tr>
    
	<tr>
    <td>Enter New Password :</td>
    <td><input type="password" name="password_1" required></td>
    </tr>
	<tr>
    <td>Confirm Password :</td>
    <td><input type="password" name="password_2" required></td>
    </tr>
  

	
	<tr>
    <td>Marital Status :</td>
    <td>
     <input type="radio" name="marital_status" value="s" required>Single
     <input type="radio" name="marital_status" value="m" required>Married
	 <input type="radio" name="marital_status" value="w" required>Widow/Widower
    </td>
    </tr>
    
   
   	<tr>
    <td>Address :</td>
    <td><input type="address" name="address" required></td>
    </tr>
	
	
	<tr>
    <td>City :</td>
    <td><input type="city" name="city" required></td>
    </tr>
	
	<tr>
    <td>State :</td>
    <td><input type="state" name="state" required></td>
    </tr>
	
    <tr>
    <td>Zipcode :</td>
    <td><input type="zipcode" name="zipcode" required></td>
    </tr>
	

  	<tr>
  	 <td> <button type="submit" class="btn" name="reg_user">Register</button></td>
  	</tr>
	
	<tr><td><p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p></td></tr>

	</table>
  </form>
  </center>
  </div>
</body>
</html>

<?php include(DESIGN_PATH . '/footer.php'); ?>