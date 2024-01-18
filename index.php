<?php include('validation.php')?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
<style>
body {font-family: "Raleway", Arial, sans-serif}
.w3-row img {margin-bottom: -8px}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=email] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav input[type=password] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 150px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}


.topnav .register-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: -400px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }

  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }

  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}


</style>



</head>


<body>


<div class="topnav">
  
  <a>INVENTORY MANAGEMENT SYSTEM</a>
  

   <?php
  if(isset($_SESSION['status']))
  {
    echo $_SESSION['status'];
    unset($_SESSION['status']);
  }?>

  

  <div class="login-container">

    <form action="validation.php" method="post">

 
   <input type="email" name="email" id="email" placeholder="Username" required>
      <input type="password" name="password" id="password" placeholder="Password" required>


      <button type="submit" name="login">Login</button>


    </form>

  </div>


<div class="register-container">
       <button onclick="window.location.href='registrationform.php';"> 
     Register
</button>

</div>


</div>



<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">

  <!-- Header -->
  <header class="w3-container w3-xlarge w3-padding-24">
  
  </header>

  

    
  </div>
  
<!-- End Page Content -->
</div>

<!-- Footer / About Section -->

<footer class="w3-light-grey w3-padding-64 w3-center" id="about">
  <h2>About</h2>
     <p>Inventory Management System is the online Inventory Application.<br>Users can use following features.These features can be accessed via Internet.</p>
    
    <li>Exact Purchase & Sales Details</li>
    <li>Company Info,Item Details</li>
    <li>Calculate Market Value</li>
    <li>Exact Stock Detection</li>
    <li>Transaction History</li>
   


    <p class="w3-large w3-text-pink">Do not hesitate to Contact Us!</p>
    <a href="https://www.facebook.com/rekha.shrestha.37625">click here for contact</a>

</body>
</html>
