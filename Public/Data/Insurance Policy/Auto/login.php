<?php require_once('../../../PRIVATE/Initialize.php'); ?>
<?php include(DESIGN_PATH . '/header.php'); ?>

<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div id="content">	 
<center>
  <div class="header">
  	<h2>Login</h2>
  </div> 
 <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	<table style="border:none">
  	
	<tr><td><label for="username">Username : </label></td><td>
  		<input type="text" id="username" name="username" ></td></tr>


	<tr><td><label for="password">Password : </label></td><td>
  		<input type="password" id="password" name="password"></td></tr>
  	<tr><td colspan=2>
		<center><button type="submit" class="btn" name="login_user" style="margin:auto">Login</button></center></td>
		</tr>
	</table>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
 </center>
  </div>
</body>
</html>
	
<?php include(DESIGN_PATH . '/footer.php'); ?>