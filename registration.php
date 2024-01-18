<?php

session_start();

$con = mysqli_connect('127.0.0.1:3306','root','','crud');



if(isset($_POST['save'])){


     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $sql_u ="SELECT * FROM register where Username='$email'";
     $res_u =mysqli_query($con,$sql_u) or die(mysqli_error($con));

     if(mysqli_num_rows($res_u)>0){

      $email_error="sorry ....This Email Address has already been taken";

     }else{
  $query="INSERT INTO register(Firstname,Lastname,Username,Password) values 
               ('$firstname','$lastname','$email','$password')";

               $query_run=mysqli_query($con,$query);
               if($query_run)
               {
                  $_SESSION['status']="Your Account has been opened successfully ";  
               }

               header("location:registrationform.php");
  
  exit();

  }
}
?>