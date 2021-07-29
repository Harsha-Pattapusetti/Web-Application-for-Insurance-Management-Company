<?php require_once('../../../../PRIVATE/Initialize.php'); ?>
<?php include(DESIGN_PATH . '/header.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>New Policy Registration </title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
  <center>
  <div class="header">
  	<h2>New Policy Registration</h2>
  </div>
	<div id="content">
  <form method="post" action="servernew.php">
 
  	<table>
  
    <tr>
    <td>Type of Insurance :</td>
    <td>
     <input type="radio" name="type_of_insu" value="h" required>HOME INSURANCE
     <input type="radio" name="type_of_insu" value="a" required>AUTO INSURANCE
    </td>
    </tr>
 	
	<tr>   
         <td>Start Date</td>
		 <td><input type = "date" name = "start_date" value = "" required /></td>
    </tr>
	<tr>   
         <td>End Date</td>
		 <td><input type = "date" name = "end_date" value = "" required /></td>
    </tr>
	
	
	<tr>
    <td>Premium Amount:</td>
    <td><input type="text" name="pr_amount" value = "" required /></td>
    </tr>
    
	
  	<tr>
  	 <td> <button type="submit" class="btn" name="reg_insurance">SUBMIT</button></td>
  	</tr>


	</table>
  </form>
  </center>
  </div>
</body>
</html>

<?php include(DESIGN_PATH . '/footer.php'); ?>