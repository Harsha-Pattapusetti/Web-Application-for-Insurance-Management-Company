<?php
include "server.php"; 
if(isset($_GET['hid']))
{  
$sql = "select * from home where home_no=".$_GET['hid'];    
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_object($result)){
	
	

?>
 <div id="content">
   <form method="post" action="server.php">
   <input type="hidden" name="hid" value="<?php echo $_GET['hid'];?>" />
  	<table>
  
<tr>
    <td>Purchase Date:</td>
    <td><input type = "date" name = "purchase_date" value = "<?php echo $row->purchase_date;?>" required /></td>
    </tr>
	
	<tr>
    <td>Purchase Value:</td>
    <td><input type="text" name="pur_value" value = "<?php echo $row->pur_value;?>" required /></td>
    </tr>
	
	<tr>
    <td>Area in Sq Feet:</td>
    <td><input type="text" name="area" value = "<?php echo $row->area;?>" required /></td>
    </tr>
	
    <tr>
    <td>Type of Home :</td>
    <td>
     <input type="radio" name="type_of_home" value="s" <?php if($row->type_of_home=="s"){echo "checked";}?> required>Single family
     <input type="radio" name="type_of_home" value="m" <?php if($row->type_of_home=="m"){echo "checked";}?> required>Multi family
	 <input type="radio" name="type_of_home" value="c" <?php if($row->type_of_home=="c"){echo "checked";}?> required>Condominium
	 <input type="radio" name="type_of_home" value="t" <?php if($row->type_of_home=="t"){echo "checked";}?> required>Town house
    </td>
    </tr>
	
	<tr>
    <td>Auto Fire Notification :</td>
    <td>
     <input type="radio" name="auto_fire_not" value="1" <?php if($row->auto_fire_not=="1"){echo "checked";}?> required>Yes
     <input type="radio" name="auto_fire_not" value="0" <?php if($row->auto_fire_not=="0"){echo "checked";}?> required>No
    </td>
    </tr>

	<tr>
    <td>Home Security System:</td>
    <td>
     <input type="radio" name="home_security" value="1" <?php if($row->home_security=="1"){echo "checked";}?>  required>Yes
     <input type="radio" name="home_security" value="0" <?php if($row->home_security=="0"){echo "checked";}?> required>No
    </td>
    </tr>
	
	<tr>
    <td>Swimming Pool:</td>
    <td>
     <input type="radio" name="pool" value="u" >Underground <?php if($row->pool=="u"){echo "checked";}?>
     <input type="radio" name="pool" value="o" >Overground  <?php if($row->pool=="o"){echo "checked";}?>
	 <input type="radio" name="pool" value="i" >Indoor <?php if($row->pool=="i"){echo "checked";}?>
	 <input type="radio" name="pool" value="m" >Multiple <?php if($row->pool=="m"){echo "checked";}?>
    </td>
    </tr>	

	<tr>
    <td>Basement:</td>
    <td>
     <input type="radio" name="basement" value="1" <?php if($row->basement=="1"){echo "checked";}?> required>Yes
     <input type="radio" name="basement" value="0" <?php if($row->basement=="0"){echo "checked";}?>  required>No
    </td>
    </tr>
		
	
	<tr>
  	 <td> <button type="submit" class="btn" name="edit_home">Continue</button></td>
  	</tr>	  
</table>

  
  
  </form>

  </div>


<?php
}
}

?>