<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Availability | IMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
     <style>
body {
  margin: 0;
  font-size: 20px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #04AA6D;
  color: white;
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}
</style>
</head>
<body>

<div class="header">
  <h2>INVENTORY MANAGEMENT SYSTEM</h2>
  <p>your transaction partner</p>
</div>


<div id="navbar">
       
      <a  href="whole.php">Wholesaler</a>
        <a  href="product.php">Product Details</a>
      <a  href="retail.php">Retailer</a>
            <a  href="stock.php">Stock Availability</a>
      <a  href="purchases.php">My Purchase history</a>
            <a  href="sale.php">My Sales History</a>
            <a  href="index.php">Logout</a>
  
  
</div>


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

  
 <?php
     require_once"process.php";?>
<?php

if(isset($_SESSION['message'])):?>
     <div class="alert alert-<?=$_SESSION['msg_type']?>">

          <?php
          echo $_SESSION['message'];
          unset($_SESSION['message']);
          ?>
     </div>
<?php endif ?>

     <?php
     $mysqli =new mysqli('127.0.0.1:3306','root','','crud') or die(mysqli_error($mysqli));
     $result =$mysqli->query("select *from item") or die($mysqli->error);
   //  pre_r($result);

?>


<div class="container">

     <h1>Available Items  

     </h1>
     <table class="table table-bordered">

          <thead>
               <tr>

                   <th>#</th>
                   <th>Item Code</th>
                   <th>Item Name</th>
                   <th>Purchase</th>
                   <th>Sales</th>
                   <th>Stock</th>
                   <th>C.P</th>
                   <th>S.P</th>
                   <th>C Amt</th>
                   <th>S Amt</th>
                   <th>Stock C Amt</th>
                   <th>Stock S Amt</th>

               </tr>
          </thead>
          

          <?php
          $no=1;
          while($row=$result->fetch_assoc()):?>

               <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['Item_id'];?></td>
                    <td><?php echo $row['Itemname'];?></td>
                    <td><?php echo $row['purchase'];?></td>
                    <td><?php echo $row['sales'];?></td>
                    <td><?php echo $row['stock'];?></td>
                    <td><?php echo $row['Costprice'];?></td>
                    <td><?php echo $row['Sellingprice'];?></td>
                    <td><?php echo $row['C_Amt'];?></td>
                    <td><?php echo $row['S_Amt'];?></td>                 
                    <td><?php echo $row['Stock_C_Amt'];?></td>
                    <td><?php echo $row['Stock_S_Amt'];?></td>

               </tr>

          <?php 
          $no ++;
     endwhile;?>
     </table>

<?php


$mysqli =new mysqli('127.0.0.1:3306','root','','crud') or die(mysqli_error($mysqli));
$sql = "SELECT  SUM(Stock_C_Amt) from item";
$result = $mysqli->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Inventory Value: ". $row['SUM(Stock_C_Amt)'];
    echo "<br>";
}
 

?>  

<?php


$mysqli =new mysqli('127.0.0.1:3306','root','','crud') or die(mysqli_error($mysqli));
$sql = "SELECT  SUM(S_Amt) from item";
$result = $mysqli->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Turnover: ". $row['SUM(S_Amt)'];
    echo "<br>";
}
 

?>  

<?php


$mysqli =new mysqli('127.0.0.1:3306','root','','crud') or die(mysqli_error($mysqli));
$sql = "SELECT  SUM(Stock_S_Amt) from item";
$result = $mysqli->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Market Value: ". $row['SUM(Stock_S_Amt)'];
    echo "<br>";
}
 

?> 
     
<button onclick="window.location.href='purchaseform.php';"> 
     Purchase
</button>

<button onclick="window.location.href='salesform.php';"> 
     Sale
</button>

<button onclick="window.print()">Print</button>

</div>