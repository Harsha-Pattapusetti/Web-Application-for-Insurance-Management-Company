<?php
include "server.php"; 
if(isset($_GET['aid']))
{  
$sql = "select * from auto where auto_id=".$_GET['aid'];    
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_object($result)){
	
	

?>
 <div id="content">
   <form method="post" action="server.php">
   <input type="hidden" name="aid" value="<?php echo $_GET['aid'];?>" />
  	<table>
  
    <td>Vehicle Identification Number:</td>
    <td><input type = "text" name = "vin" value = "<?php echo $row->vin;?>" required /></td>
    </tr>
	
	<tr>
    <td>Model Year of the vehicle:</td>
    <td><input type="text" name="model_year" value = "<?php echo $row->model_year;?>" required /></td>
    </tr>
		
    <tr>
    <td>Status :</td>
    <td>
     <input type="radio" name="status" value="l" <?php if($row->status=="l"){echo "checked";}?> required>Leased
     <input type="radio" name="status" value="f" <?php if($row->status=="f"){echo "checked";}?> required>Financed
	 <input type="radio" name="status" value="o" <?php if($row->status=="o"){echo "checked";}?> required>Owned
    </td>
    </tr>
	
	<tr>
  	 <td> <button type="submit" class="btn" name="edit_auto">Continue</button></td>
  	</tr>	  
</table>

  
  
  </form>

  </div>


<?php
}
}

?>