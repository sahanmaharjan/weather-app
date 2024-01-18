<?php

session_start();

$con=mysqli_connect('localhost','root','','crud');

mysqli_select_db($con,'crud');

if(isset($_POST['login'])){

     $email = $_POST['email'];
     $password = $_POST['password'];

     $s ="select * from register where Username = '$email' && password ='$password'";

      $result =mysqli_query($con,$s);

      $num= mysqli_num_rows($result);

       if($num == 1){
            header('location:home.html');
          }else{
              $_SESSION['status']="Username and password doesnot match";
              header("location:index.php")   ; 
          }    }   
?>

