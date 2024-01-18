<?php

session_start();


$mysqli =new mysqli('127.0.0.1:3306','root','','crud') or die(mysqli_error($mysqli));

$con=mysqli_connect('localhost','root','','crud');

mysqli_select_db($con,'crud');


if(isset($_POST['save'])){
     $id = $_POST['id'];
     $name = $_POST['name'];
     $owner = $_POST['owner'];
     $address = $_POST['address'];
      
      $s ="select * from retailer where Pan_num = '$id'";

      $result =mysqli_query($con,$s);


       if(mysqli_num_rows($result)>0){
               
 $email_error="sorry ....This Pan Number has been already recorded";

               
          }else{
                $reg="insert into retailer(Pan_num,Companyname,Owner,Address) values 
               ('$id','$name','$owner','$address')";

          mysqli_query($con,$reg);
    

$_SESSION['message']="record has been saved!";
$_SESSION['msg_type']="success";
header("location:retail.php");

}}

if (isset($_GET['delete'])){
     $id=$_GET['delete'];
     $mysqli->query("DELETE FROM retailer where Pan_num=$id") or die($mysqli->error());

 $_SESSION['message']="record has been deleted!";
$_SESSION['msg_type']="danger";

header("location: retail.php");
}

if(isset($_GET['edit'])){
     $id=$_GET['edit'];
     $result=$mysqli->query("SELECT * FROM retailer where id=$id") or die($mysqli->error());
     if (count($result)==1){
     $row = $result->fetch_array();
     $name=$row['name'];
     $costprice=$row['costprice'];
     }
}
