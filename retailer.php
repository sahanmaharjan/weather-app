<?php

session_start();





$con=mysqli_connect('localhost','root','','crud');

mysqli_select_db($con,'crud');

     $id = $_POST['id'];
     $name = $_POST['name'];
     $owner = $_POST['owner'];
     $address = $_POST['address'];

     $s ="select * from retailer where Pan_num = '$id'";

      $result =mysqli_query($con,$s);

      $num= mysqli_num_rows($result);

       if($num == 1){
               echo "Username Already Taken";
               
          }else{
                $reg="insert into retailer(Pan_num,Companyname,Owner,Address) values 
               ('$id','$name','$owner','$address')";

          mysqli_query($con,$reg);
          echo"registration successful";
          header("location:retailerform.php");
          

          }              
?>

