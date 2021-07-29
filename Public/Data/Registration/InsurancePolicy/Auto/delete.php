 <?php
include "server.php";    
if(is_numeric($_GET['aid'])){    
$sql = "delete from auto where  auto_id=".$_GET['aid']; ;    
$result = mysqli_query($db,$sql);    
}
header('Location:modified1.php');
?>

