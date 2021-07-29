<?php require_once('../../../../../PRIVATE/Initialize.php');?>
<?php include(DESIGN_PATH . '/header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
  <center>
  <div class="header">
  	<h2>Auto Insurance</h2>
  </div>
  <div id="content">
   <form method="post" action="server_d.php">
  	<table>
  
    <td>Driver License No:</td>
    <td><input type = "text" name = "license_no" value = "" required /></td>
    </tr>
	
	<tr>
    <td>Driver First Name:</td>
    <td><input type="text" name="driver_fname" value = "" required /></td>
    </tr>
	<tr>
    <td>Driver Last Name:</td>
    <td><input type="text" name="driver_lname" value = "" required /></td>
    </tr>
	
    <tr>
    <td>Date of birth:</td>
    <td><input type="date" name="dob" value = "" required /></td>
    </tr>
	

	</table>
	<div>
	  <br>
      <a href="<?php echo url_wds('/data/registration/insurancepolicy/auto/driver.php'); ?>">ADD DRIVER </a>
    </div>
    <tr>
  	 <td> <button type="submit" class="btn" name="reg_driver">Submit</button></td>
  	</tr>

  </form>
  </center>
  </div>
</body>
</html>
	

<?php include(DESIGN_PATH . '/footer.php'); ?> 