

<?php 
include("connect.php");
session_start();

    if(isset($_POST['register']))
    {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];  
    $conf_pwd = $_POST['confirm_pwd'];  


    if ($pwd === $conf_pwd) {

        $sql ="INSERT INTO users (username,email,password) VALUES('$name', '$email' , '$pwd')";

        $query=mysqli_query($conn,$sql);
    
        if($query){
    
        header('Location: index.html'); 
    
        } }
     else {
         
         echo "<script>alert('Passwords must match!!!')</script>";
        
     }


   

}
?>

