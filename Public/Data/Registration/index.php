
<?php require_once('../../../PRIVATE/Initialize.php'); ?>


<?php include(DESIGN_PATH . '/header.php'); ?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

<div class="header">
	<h2>Welcome to WDS Insurance Policy</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<div id="content">
               <h2>WE ARE HERE TO HELP YOU.</h2>
				
			    <ul>
				   <li><a href="<?php echo url_wds('/data/registration/insurancepolicy/new.php'); ?>">ADD NEW INSURANCE POLICY</a></li>
                   <li><a href="<?php echo url_wds('/data/registration/insurancepolicy/edit_ins.php'); ?>">EDIT INSURANCE POLICY</a></li>
				   <li><a href="<?php echo url_wds('/data/registration/insurancepolicy/modified1.php'); ?>">UPDATE USER ACCOUNT</a></li>
	            </ul>
             <br>
    	<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		</div>
    <?php endif ?>
	

</div>
		
</body>
</html>

<?php include(DESIGN_PATH . '/footer.php'); ?>