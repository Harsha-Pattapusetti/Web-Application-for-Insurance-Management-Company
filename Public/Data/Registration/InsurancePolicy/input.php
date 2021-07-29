<?php 
   
   if (isset($_POST["type_of_insu"])
    && $_POST["type_of_insu"] == "h") {
		header('location: home/modified1.php');
        //logic specific for Home
    } else if (isset($_POST["type_of_insu"])
    && $_POST["type_of_insu"] == "a") {
		header('location: auto/modified1.php');
        //logic specific for Auto
    } else {
        //die or some kind of error handling can be done
    }



 ?>