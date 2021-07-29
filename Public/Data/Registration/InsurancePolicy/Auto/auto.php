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
   <form method="post" action="server.php">
  	<table>
  
    <td>Vehicle Identification Number:</td>
    <td><input type = "text" name = "vin" value = "" required /></td>
    </tr>
	
	<tr>
    <td>Model Year of the vehicle:</td>
    <td><input type="text" name="model_year" value = "" required /></td>
    </tr>
		
    <tr>
    <td>Status :</td>
    <td>
     <input type="radio" name="status" value="l" required>Leased
     <input type="radio" name="status" value="f" required>Financed
	 <input type="radio" name="status" value="o" required>Owned
    </td>
    </tr>
	
	<tr>
  	 <td> <button type="submit" class="btn" name="reg_auto">Continue</button></td>
  	</tr>	  
</table>

  
  
  </form>
  </center>
  </div>
</body>
</html>

	

<?php include(DESIGN_PATH . '/footer.php'); ?>