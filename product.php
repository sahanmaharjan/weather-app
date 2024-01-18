<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Details | IMS</title>
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
     <h1>Item Details</h1>
     <table class="table table-bordered">
          <thead>
               <tr>
               <th>#</th>
                      <th>Item Code</th>
                      <th>Item Name</th>
                      <th>Cost Price/Box</th>
                      <th>Selling Price/Box</th>
                      
                      <th colspan="2">action</th>
               </tr>
          </thead>
          

          <?php
          $no=1;
          while($row=$result->fetch_assoc()):?>
               <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['Item_id'];?></td>
                    <td><?php echo $row['Itemname'];?></td>
                    <td><?php echo $row['Costprice'];?></td>
                    <td><?php echo $row['Sellingprice'];?></td>
                    
                    
                   <td>
                         <a href="process.php?edit=<?php echo $row['Item_id']; ?>"
                              class="btn btn-info">Edit</a>
                              <a href="process.php?delete=<?php echo $row['Item_id'];?>"
                                   class="btn btn-danger">Delete</a>
                    </td>
               </tr>
    
          <?php 
           $no ++;
     endwhile;?>
         

      </table>


<?php
     function pre_r($array){
          echo '<pre>';
          print_r($array);
          echo '</pre>';
     }
?>

<button onclick="window.location.href='productform.php';"> 
     add product
</button>
<button onclick="window.print()">Print</button>
 
</div>
