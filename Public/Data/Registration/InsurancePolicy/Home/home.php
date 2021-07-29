<?php require_once('../../../../../PRIVATE/Initialize.php');?>
<?php include('server.php') ?>
<?php include(DESIGN_PATH . '/header.php'); ?>


<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
  <center>
  <div class="header">
  	<h2>Home Insurance</h2>
  </div>
  <div id="content">
   <form method="post" action="modified1.php">
  	<table>
    <tr>
    <td>Purchase Date:</td>
    <td><input type = "date" name = "purchase_date" value = "" required /></td>
    </tr>
	
	<tr>
    <td>Purchase Value:</td>
    <td><input type="text" name="pur_value" value = "" required /></td>
    </tr>
	
	<tr>
    <td>Area in Sq Feet:</td>
    <td><input type="text" name="area" value = "" required /></td>
    </tr>
	
    <tr>
    <td>Type of Home :</td>
    <td>
     <input type="radio" name="type_of_home" value="s" required>Single family
     <input type="radio" name="type_of_home" value="m" required>Multi family
	 <input type="radio" name="type_of_home" value="c" required>Condominium
	 <input type="radio" name="type_of_home" value="t" required>Town house
    </td>
    </tr>
	
	<tr>
    <td>Auto Fire Notification :</td>
    <td>
     <input type="radio" name="auto_fire_not" value="1" required>Yes
     <input type="radio" name="auto_fire_not" value="0" required>No
    </td>
    </tr>

	<tr>
    <td>Home Security System:</td>
    <td>
     <input type="radio" name="home_security" value="1" required>Yes
     <input type="radio" name="home_security" value="0" required>No
    </td>
    </tr>
	
	<tr>
    <td>Swimming Pool:</td>
    <td>
     <input type="radio" name="pool" value="u" >Underground 
     <input type="radio" name="pool" value="o" >Overground 
	 <input type="radio" name="pool" value="i" >Indoor 
	 <input type="radio" name="pool" value="m" >Multiple 
    </td>
    </tr>	

	<tr>
    <td>Basement:</td>
    <td>
     <input type="radio" name="basement" value="1" required>Yes
     <input type="radio" name="basement" value="0" required>No
    </td>
    </tr>
    
	<tr>
  	 <td> <button type="submit" class="btn" name="reg_home">Submit</button></td>
  	</tr>

   </table>
  </form>
  </center>
  </div>
</body>
</html>
	

<?php include(DESIGN_PATH . '/footer.php'); ?>