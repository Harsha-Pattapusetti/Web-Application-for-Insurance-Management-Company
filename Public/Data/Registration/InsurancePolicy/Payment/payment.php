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
  	<h2>PAYMENT</h2>
  </div>
  <div id="content">
   <form method="post" action="server.php">
  	<table>
  
    <td>Payment Amount:</td>
    <td><input type = "text" name = "pay_amt" value = "" required /></td>
    </tr>
	
    <tr>
    <td>Payment Method</td>
    <td>
     <input type="radio" name="pay_method" value="PayPal" required>PayPal
     <input type="radio" name="pay_method" value="Credit" required>Credit card
	 <input type="radio" name="pay_method" value="Debit" required>Debit Card
	 <input type="radio" name="pay_method" value="Check" required>Check
    </td>
    </tr>
	
	<tr>
  	 <td> <button type="submit" class="btn" name="reg_payment">Continue</button></td>
  	</tr>	  
</table>

  
  
  </form>
  </center>
  </div>
</body>
</html>

	

<?php include(DESIGN_PATH . '/footer.php'); ?>