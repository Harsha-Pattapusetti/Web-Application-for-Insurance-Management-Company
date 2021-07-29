 <?php
include "server.php"; 
if(isset($_GET['username']))
{  $_SESSION['username']=$_GET['username'];
?>
<a href="./insurancepolicy/edit_ins.php" > Edit <?php echo $_GET['username'];?> Policy </a>
<?php
$sql = "select * from customers where c_id=".$_GET['c_id'];    
$result = mysqli_query($db,$sql);
while($row = mysqli_fetch_object($result)){
	
	

?>
 <div id="content">
   <form method="post" action="server.php">
   <input type="hidden" name="c_id" value="<?php echo $_GET['c_id'];?>" />
  	<table>
  
    <td>Customer Id:</td>
    <td><input type = "text" name = "c_id" value = "<?php echo $row->c_id;?>" required /></td>
    </tr>	
	<tr>
    <td>First Name:</td>
    <td><input type="text" name="fname" value = "<?php echo $row->fname;?>" required /></td>
    </tr>
	<td>Last Name:</td>
    <td><input type = "text" name = "lname" value = "<?php echo $row->lname;?>" required /></td>
    </tr>
	<tr>
    <td>Email:</td>
    <td><input type="text" name="email" value = "<?php echo $row->email;?>" required /></td>
    </tr>

	<tr>
    <td>Gender:</td>
    <td>
     <input type="radio" name="gender" value="m" >Male <?php if($row->gender=="m"){echo "checked";}?>
     <input type="radio" name="gender" value="f" >Female  <?php if($row->gender=="f"){echo "checked";}?>
	 <input type="radio" name="gender" value="o" >Prefer not to say <?php if($row->gender=="o"){echo "checked";}?>
    </td>
    </tr>	
	
	<td>Username:</td>
    <td><input type = "text" name = "username" value = "<?php echo $row->username;?>" required /></td>
    </tr>
	<tr>
    <td>Marital Status:</td>
    <td>
     <input type="radio" name="marital_status" value="s" >Single <?php if($row->marital_status=="s"){echo "checked";}?>
     <input type="radio" name="marital_status" value="m" >Married  <?php if($row->marital_status=="m"){echo "checked";}?>
	 <input type="radio" name="marital_status" value="w" >Widow/Widower <?php if($row->marital_status=="w"){echo "checked";}?>
    </td>
    </tr>	
		
	<tr>
    <td>Address:</td>
    <td><input type="text" name="address" value = "<?php echo $row->address;?>" required /></td>
    </tr>
	
	<td>City:</td>
    <td><input type = "text" name = "city" value = "<?php echo $row->city;?>" required /></td>
    </tr>
	
	<tr>
    <td>State:</td>
    <td><input type="text" name="state" value = "<?php echo $row->state;?>" required /></td>
    </tr>
	<tr>
    <td>Zipcode:</td>
    <td><input type="text" name="zipcode" value = "<?php echo $row->zipcode;?>" required /></td>
    </tr>		

	
	<tr>
  	 <td> <button type="submit" class="btn" name="edit_customers">Continue</button></td>
  	</tr>	  
</table>

  
  
  </form>

  </div>


<?php
}
}

?>