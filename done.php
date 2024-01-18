<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dialog.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>


   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jquery-3.6.0.min.js"></script>

    <title>Purchase | IMS</title>
</head>

<body>



  <?php

include 'purchase.php';

$con=dbcon();
$sql="select Item_id from item";
$result=mysqli_query($con,$sql);

$pannumber="select Pan_num from wholesaler";
$output=mysqli_query($con,$pannumber);

?>

    <script>
            $(document).ready(function(){
                $("#qty,#cost").keyup(function(){

                    var amt=0;
                    var x=Number($("#qty").val());
                    var y=Number($("#cost").val());
                    var amt = x * y;
        $("#amt").val(amt);
                });

            });
        </script>

    <div class="container">
        
<?php
if(isset($_SESSION['status']))
{
    echo $_SESSION['status'];
    unset($_SESSION['status']);
}?>

        <header>New Account</header>

 <form action="registration.php" method="post" onsubmit="return validateForm()">

           <div class="form first">
                <div class="details personal">
                    <span class="title">User Details</span>

                    <div class="fields">


                        <div class="input-field">

                <label for="firstname">First name</label>
                <input type="text" name="firstname" id="firstname" placeholder="Firstname goes here.." oninvalid="alert('You must fill out the form!');" required>
                         
                        </div>

                        <div class="input-field">
                           <label for="lastname">Last name</label>
                <input type="text" name="lastname" id="lastname" placeholder="lastname goes here..">
                        </div>

                      
                        <div class="input-field">
                        <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email goes here..">
                        </div>


                        <div class="input-field">
                          
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password goes here..">
                
                        </div>

                </div>
                        
<div class="form-group">
<button type="submit" class="btn btn-primary" onclick="myFunction()" name="save">save</button>
</div>   
</div>
 </div>
                 
                    </form>
    </div>


    <script src="script.js"></script>
    <script src="dialog_script.js"></script>
</body>
</html>