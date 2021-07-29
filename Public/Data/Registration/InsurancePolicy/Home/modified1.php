<?php require_once('../../../../../PRIVATE/Initialize.php');?>
<?php include(DESIGN_PATH . '/header.php'); ?>

<?php    
include "server.php";    
$sql = "select * from home where username='$username'";    
$result = mysqli_query($db,$sql);    
?>   
 
<html> 
<head>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>  
	<center>
         <h1><center>Home Insurance Data</center></h1>
          <div id="content">	
		  
		    <ul>
			 <a href="<?php echo url_wds('/data/registration/insurancepolicy/home/home.php'); ?>">Add New Home</a><br><br>
			 <a href="<?php echo url_wds('/data/registration/insurancepolicy/payment/payment.php'); ?>">Make a Payment</a>
	         </ul>
             <br>
		  
          <div class="home-details">    
	<?php    
		$prev_vid=0;
		while($row = mysqli_fetch_object($result)){
		if($prev_vid!=0 && $prev_vid!=$row->home_no){
			echo "</table></div></br>";
		}
		if($prev_vid!=$row->home_no){
				$prev_vid=$row->home_no;
    ?>  
			<div class="card">
            <table>    
            <tr>    
                <td>
					<b>Home Number</b> 
				</td>
				<td>  
					<?php echo $row->home_no;?>  
				</td>  
			</tr>				
            <tr>    
                <td>
					<b>Purchase Date</b> 
				</td>
				<td>  
					<?php echo $row->purchase_date;?>  
				</td>  
			</tr>	               
            <tr>    
                <td>
					<b>Purchase Value</b> 
				</td>
				<td>  
					<?php echo $row->pur_value;?>  
				</td>  
			</tr>	
            <tr>    
                <td>
					<b>Area in Sq Feet</b> 
				</td>
				<td>  
					<?php echo $row->area;?>  
				</td>  
			</tr>				
            <tr>    
                <td>
					<b>Type of home</b> 
				</td>
				<td>  
					<?php echo $row->type_of_home;?>  
				</td>  
			</tr>	               
            <tr>    
                <td>
					<b>Auto Fire Notification</b> 
				</td>
				<td>  
					<?php echo $row->auto_fire_not;?>  
				</td>  
			</tr>	
            <tr>    
                <td>
					<b>Home Security System</b> 
				</td>
				<td>  
					<?php echo $row->home_security;?>  
				</td>  
			</tr>				
            <tr>    
                <td>
					<b>Swimming pool</b> 
				</td>
				<td>  
					<?php echo $row->pool;?>  
				</td>  
			</tr>	               
            <tr>    
                <td>
					<b>Basement</b> 
				</td>
				<td>  
					<?php echo $row->basement;?>  
				</td>  
			</tr>
            <td colspan="2"> <a href="edit.php?hid=<?php echo $row->home_no;?>" onclick="return confirm('Are You Sure')">Edit    
			</a> </td>
			<td colspan="2"> <a href="delete.php?hid=<?php echo $row->home_no;?>" onclick="return confirm('Are You Sure')">Delete    
			</a> </td>  
				</tr>
				
				</table>
				<br/>
			<?php
			}
			?>	
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