<?php
error_reporting(0);
?>

<?php 
  $msg = "";
    if(isset($_POST['claimitem']))

    {        
        
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $item_name = $_POST['item_name'];
    $item_color = $_POST['item_color'];
    $time_lost = $_POST['time_lost'];
    $date_lost = $_POST['date_lost'];
    $location_lost = $_POST['location_lost'];
    $item_description = $_POST['item_description'];

    $image= $_FILES["uploadfile"]["name"];        
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
    $folder = "assets/claim/".basename($image);


	include_once 'connect.php';    


    $sql ="INSERT INTO claim ( firstname, lastname, email, mobile, item_name, item_color, time_lost, date_lost, location_lost, item_description, image) VALUES('$fname','$lname','$email' , '$mobile', '$item_name','$item_color','$time_lost','$date_lost','$location_lost','$item_description','$image')";


    mysqli_query($conn,$sql);


		// Now let's move the uploaded image into the folder: image

        if (move_uploaded_file($tempname, $folder))  {

          header("Location: dashboard.php");

        }else{

            echo"Failed to upload image";

      }

   
      $row = mysqli_query($conn, "SELECT * FROM claim");

}
?>

