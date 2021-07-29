<?php
include "server.php";    
if(is_numeric($_GET['hid'])){    
$sql = "delete from home where  home_no=".$_GET['hid']; ;    
$result = mysqli_query($db,$sql);    
}
header('Location:modified1.php');
?>