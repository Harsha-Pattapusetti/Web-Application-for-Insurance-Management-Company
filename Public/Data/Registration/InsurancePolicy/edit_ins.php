<?php require_once('../../../../PRIVATE/Initialize.php'); ?>
<?php include(DESIGN_PATH . '/header.php'); ?>

<!DOCTYPE html>
<html> 
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
  <center>
  <div class="header">
  	<h2> EDIT EXISTING POLICY </h2>
  </div>
  <div id="content">
  <form method="post" action="input.php">	
	
	<table>

	<tr>
    <td>Choose type of Insurance :</td>
    <td>
     <input type="radio" name="type_of_insu" value="h" required>HOME INSURANCE
     <input type="radio" name="type_of_insu" value="a" required>AUTO INSURANCE
    </td>
    </tr>
	
	<tr>
  	 <td> <button type="submit" class="btn" name="reg_insurance">CONTINUE</button></td>
  	</tr>
	
	</table>
  </form>
  </center>
  </div>
</body>
</html>

<?php include(DESIGN_PATH . '/footer.php'); ?>