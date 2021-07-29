<?php require_once('../../../../../PRIVATE/Initialize.php');?>
<?php include(DESIGN_PATH . '/header.php'); ?>

<?php    
include "server.php";    
$sql = "select a.*,d.* from auto a,driver d where a.username='$username' and d.vin=a.vin";    
$result = mysqli_query($db,$sql);    
?> 

<html> 
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
  
    <body>  
	<center>
         <h1><center>Auto Insurance Data</center></h1>
          <div id="content">	
		  
		    <ul>
			 <a href="<?php echo url_wds('/data/registration/insurancepolicy/auto/driver.php'); ?>">Add New Driver</a><br><br>
			 <a href="<?php echo url_wds('/data/registration/insurancepolicy/payment/payment.php'); ?>">Make a Payment</a>
			 
	         </ul>
             <br>
		  
          <div class="vehicle-details">    
            
	<?php    
		/*
		Auto Number	Vehicle Identification Number:	Model Year of the vehicle:	Status :	Action
		*/
		$prev_vid=0;
		while($row = mysqli_fetch_object($result)){
		if($prev_vid!=0 && $prev_vid!=$row->auto_id){
			echo "</table></div></br>";
		}
		if($prev_vid!=$row->auto_id){
				$prev_vid=$row->auto_id;
    ?>  
			<div class="card">
                <table>
			<tr>
				<td>
					<b>Auto Number</b>
				</td>
				<td>  
					<?php echo $row->auto_id;?>  
				</td>  
			</tr>
			<tr>
				<td>
					<b>Vehicle Identification Number</b>
				</td>
			<td>  
					<?php echo $row->vin;?>  
				</td>  
					</tr>
			<tr>
				<td>
					<b>Model Year of the vehicle</b>
				</td>
			<td>  
					<?php echo $row->model_year;?>  
				</td> 
					</tr>
			<tr>
				<td>
					<b>Status</b>
				</td>
				<td>  
					<?php echo $row->status;?>  
				</td>   
					</tr>
			<tr >
				<td colspan="2"> <a href="edit.php?aid=<?php echo $row->auto_id;?>" onclick="return confirm('Are You Sure')">Edit    
				</a> </td>
				<td colspan="2"> <a href="delete.php?aid=<?php echo $row->auto_id;?>" onclick="return confirm('Are You Sure')">Delete    
			     </a> </td> 
				</tr>
				
				</table>
				
				<br/>
				<!--Driver details-->
				
				 <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr> 
			    <td>Driver Number</td>
                <td>Driver License Number</td>    
                <td>Driver First Name</td>    
                <td>Driver Last Name</td>  
                <td>Date of Birth</td>				

                <td colspan = "2">Action</td>    
            </tr> 
				
			<?php
			}
			?>	
				
				   
			<tr>
                			
				<td>  
					<?php echo $row->driver_no;?>  
				</td>  
				<td>  
					<?php echo $row->license_no;?>  
				</td>  
				<td>  
					<?php echo $row->driver_fname;?>  
				</td>  
				<td>  
					<?php echo $row->driver_lname;?>  
				</td> 
                 <td>  
					<?php echo $row->dob;?>  
				</td> 				
 
				<td> <a href="edit_d.php?did=<?php echo $row->driver_no;?>" onclick="return confirm('Are You Sure')">Edit    
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





<?php include(DESIGN_PATH . '/footer.php'); ?>