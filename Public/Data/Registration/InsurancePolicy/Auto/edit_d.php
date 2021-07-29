<?php
include "server_d.php"; 
if(isset($_GET['did']))
{  
$sql = "select * from driver where driver_no=".$_GET['did'];    
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_object($result)){

?>

 <div id="content">
   <form method="post" action="server_d.php">
   <input type="hidden" name="did" value="<?php echo $_GET['did'];?>" />
  	<table>
  
    <td>Driver License No:</td>
    <td><input type = "text" name = "license_no" value = "<?php echo $row->license_no;?>" required /></td>
    </tr>
	
	<tr>
    <td>Driver First Name:</td>
    <td><input type="text" name="driver_fname" value = "<?php echo $row->driver_fname;?>" required /></td>
    </tr>
	<tr>
    <td>Driver Last Name:</td>
    <td><input type="text" name="driver_lname" value = "<?php echo $row->driver_lname;?>" required /></td>
    </tr>
	
    <tr>
    <td>Date of birth:</td>
    <td><input type="date" name="dob" value = "<?php echo $row->dob;?>" required /></td>
    </tr>
	
	<tr>
  	 <td> <button type="submit" class="btn" name="edit_driver">Continue</button></td>
  	</tr>	  
</table>

  
  
  </form>

  </div>


<?php
}
}

?>