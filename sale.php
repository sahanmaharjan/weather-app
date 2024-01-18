<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wholesale Company Detailes | IMS</title>
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

<body>

     <?php
     $mysqli =new mysqli('127.0.0.1:3306','root','','crud') or die(mysqli_error($mysqli));
     $result =$mysqli->query("select *from sale") or die($mysqli->error);
   //  pre_r($result);

?>


<div class="container">
     <h1>Sales History</h1>
     <table class="table table-bordered">
          <thead>
               <tr>
               <th>#</th>
                      <th>Bill Number</th>
                      <th>Pan Number</th>
                      <th>Company</th>
                      <th>Date</th>
                        <th>Item Code</th>
                          <th>Name of Item</th>
                            <th>Quantity</th>
                              <th>Rate</th>
                                <th>Amount</th>
                      
                      
               </tr>
          </thead>
          

          <?php
          $no=1;
          while($row=$result->fetch_assoc()):?>
               <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['billno'];?></td>
                    <td><?php echo $row['Pan'];?></td>
                    <td><?php echo $row['Company'];?></td>
                    <td><?php echo $row['date'];?></td>
                      <td><?php echo $row['item_id'];?></td>
                        <td><?php echo $row['name'];?></td>
                          <td><?php echo $row['quantity'];?></td>
                            <td><?php echo $row['rate'];?></td>
                              <td><?php echo $row['amount'];?></td>
                    
                    
                 
               </tr>
    
          <?php 
           $no ++;
     endwhile;?>
         

      </table>


<?php


$mysqli =new mysqli('127.0.0.1:3306','root','','crud') or die(mysqli_error($mysqli));
$sql = "SELECT  SUM(amount) from sale";
$result = $mysqli->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " Total Sales Amount: ". $row['SUM(amount)'];
    echo "<br>";
}
 

?>

<button onclick="window.print()">Print</button> 
</div>


 
<div>
