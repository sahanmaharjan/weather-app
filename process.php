<?php

session_start();


$mysqli =new mysqli('127.0.0.1:3306','root','','crud') or die(mysqli_error($mysqli));

$con=mysqli_connect('localhost','root','','crud');

if(isset($_POST['save'])){
     $id=$_POST['id'];
     $name=$_POST['name'];
     $costprice=$_POST['costprice'];
     $sellingprice=$_POST['sellingprice'];

     $s ="select * from item where Item_id = '$id'";

      $result =mysqli_query($con,$s);


       if(mysqli_num_rows($result)>0){
               
 $email_error="sorry ....This Item Code has been already recorded";

               
          }else{
                $reg="insert into  item(Item_id,Itemname,Costprice,Sellingprice)Values('$id','$name','$costprice','$sellingprice')";

          mysqli_query($con,$reg);
      
    


$_SESSION['message']="record has been saved!";
$_SESSION['msg_type']="success";
header("location:product.php");

}}

if (isset($_GET['delete'])){
     $id=$_GET['delete'];
     $mysqli->query("DELETE FROM item where Item_id=$id") or die($mysqli->error());

 $_SESSION['message']="record has been deleted!";
$_SESSION['msg_type']="danger";

header("location: product.php");
}

if(isset($_GET['edit'])){
     $id=$_GET['edit'];
     $result=$mysqli->query("SELECT * FROM item where id=$id") or die($mysqli->error());
     if (count($result)==1){
     $row = $result->fetch_array();
     $name=$row['name'];
     $costprice=$row['costprice'];
     }
}
