<?php
session_start();


function dbcon(){
$con = mysqli_connect('127.0.0.1:3306','root','','crud');
return $con;
}


$con = mysqli_connect('127.0.0.1:3306','root','','crud');





if(isset($_POST['save'])){


      $billno=$_POST['no'];

      $pan=$_POST['comid'];
      $com=$_POST['comname'];
      

      $date=$_POST['date'];

      $id=$_POST['itemid'];
      $name=$_POST['itemname'];

      $quantity=$_POST['qty'];
      $rate=$_POST['cost'];
      $total=$_POST['amt'];
    
   

  $query="INSERT INTO purchase(billno,Pan,Company,date,item_id,name,quantity,rate,amount)Values('$billno','$pan','$com','$date','$id','$name','$quantity','$rate','$total')";
  $query_run=mysqli_query($con,$query);

  if($query_run)
  {
      $_SESSION['status']="Bill has been entered ";
  }



header("location:purchaseform.php");


}