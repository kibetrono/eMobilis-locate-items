<?php
  
   session_start();
   
   if(isset($_POST['login'])){
      
      $myemail = $_POST['email'];
      $mypassword = $_POST['password'];
      
      require_once 'connect.php';

      $sql = "SELECT * FROM users WHERE email = '$myemail' and  password = '$mypassword'";
      
      
      $query = mysqli_query($conn,$sql);      
      
		
      if(mysqli_num_rows($query) == 1) {   


         header("Location: dashboard.php");
         exit();

         
      }else {

         header("Location: index.html");
      }
   }
?>