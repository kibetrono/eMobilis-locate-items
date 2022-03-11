<?php
// check if button has been clicked
if(isset($_GET["del"])){
$user_id=$_GET["del"]; 

// connect db
require_once "connect.php";
$sqldelete="DELETE FROM `items` WHERE id='$user_id'";
$query=mysqli_query($conn,$sqldelete);
if($query){


    header('location:managepost.php');
}else{
    echo 'Failed to delete';
}
}

?>