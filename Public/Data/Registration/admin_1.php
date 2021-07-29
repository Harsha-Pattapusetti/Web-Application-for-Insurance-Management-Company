<?php require_once('../../../PRIVATE/Initialize.php');?>
<?php include(DESIGN_PATH . '/header.php'); ?>
<?php include('server.php'); ?>
<?php

if(isset($_SESSION['adminname'])){
	$_SESSION['username']='';
	$query = "select c_id,fname,lname,email,gender,username,marital_status,address,city,state,zipcode from customers where user_type='user'";
  	$result = mysqli_query($db, $query);

?>

<html> 
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
    <body>  
	<center>
         <h1><center>USER Data</center></h1>
          <div id="content">
		  <br>
          <div class="customer-details">    
            
	<?php    
		$prev_vid=0;
		while($row = mysqli_fetch_object($result)){
		if($prev_vid!=0 && $prev_vid!=$row->c_id){
			echo "</table></div></br>";
		}
		if($prev_vid!=$row->c_id){
				$prev_vid=$row->c_id;
    ?> 		  
		  
          <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr> 
			    <td>Customer Id:</td>
                <td>First Name:</td>    
                <td>Last Name:</td>    
                <td>Email:</td>    
			    <td>Gender:</td>
                <td>Username:</td> 
				<td>Marital Status:</td>
                <td>Address:</td>    
                <td>City:</td>  
				<td>State:</td>    
                <td>Zipcode:</td>  				

                <td colspan = "2">Action</td>    
            </tr> 
	<?php
		}
	?>				   
    
<tr>
                			
				<td>  
					<?php echo $row->c_id;?>  
				</td>  
				<td>  
					<?php echo $row->fname;?>  
				</td>  
				<td>  
					<?php echo $row->lname;?>  
				</td>  
				<td>  
					<?php echo $row->email;?>  
				</td> 
                 <td>  
					<?php echo $row->gender;?>  
				</td> 	
				<td>  
					<?php echo $row->username;?>  
				</td>  
				<td>  
					<?php echo $row->marital_status;?>  
				</td>  
				<td>  
					<?php echo $row->address;?>  
				</td>  
				<td>  
					<?php echo $row->city;?>  
				</td> 
                 <td>  
					<?php echo $row->state;?>  
				</td> 	
				<td>  
					<?php echo $row->zipcode;?>  
				</td> 	
 
				<td> <a href="admin_edit_customers.php?username=<?php echo $row->username;?>&c_id=<?php echo $row->c_id;?>" onclick="return confirm('Are You Sure')">Edit    
				</a> </td>  
			</tr>   
				
		<?php }
			
			if($prev_vid!=0){
				echo "</table></div><br/>";
			}
		?> 
		
		 
	    </div> 
		</center>
	    </div>
    </body>    
</html> 
<?php
}
	
else{
	echo "You Are Unauthorized";
	}	
?>

<?php include(DESIGN_PATH . '/footer.php'); ?>
