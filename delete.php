<?php
// check if button has been clicked
if(isset($_GET["del"])){
$user_id=$_GET["del"]; 

// connect db
require_once "connect.php";
$sqldelete="DELETE FROM `report` WHERE id='$user_id'";
$query=mysqli_query($conn,$sqldelete);
if($query){


    header('location:showmanagefound.php');
}else{
    echo 'Failed to delete';
}
}

?>