


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


    <script src="itemsales.js"></script>
    <script src="companysales.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="jquery-3.6.0.min.js"></script>

    <title>Sales | IMS</title>
</head>

<body>
     <?php

include 'sales.php';

$con=dbcon();
$sql="select Item_id from item";
$result=mysqli_query($con,$sql);

$pannumber="select Pan_num from retailer";
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
        <header>less Quantity</header>

     

 <form action="salesform.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Bill Details</span>

                    <div class="fields">
                    
                          <div class="input-field">
                            <label>Bill Number</label>
                            <input type="number" name="no"  required>
                        </div>

                         <div class="input-field">

                              <label>Pan Number</label>
                        <select name="comid" id="comid" onchange="fetchcomsales()" required>
                            <option value="">select pan</option>

                      <?php
                    while($rows=mysqli_fetch_array($output))
                    {
                    $p=$rows['Pan_num'];
                    echo '<option value="'.$p.'">'.$p.'</option>';
                    }

                    ?>
                
                        </select>
                        </div>

                           <div class="input-field">
                            <label>Company Name</label>
                            <input type="text" name="comname" id="comname" required >
                        </div>


                            



                        <div class="input-field">
                            <label>Date</label>
                            <input type="date" name="date" required>
                        </div>

                        <div class="input-field">
                            
                            <label>Item Code</label>
                        <select name="itemid" id="itemid" onchange="fetchitm()" required>
                            <option value="">select item code</option>


                      <?php
                    while($rows=mysqli_fetch_array($result))
                    {
                    $k=$rows['Item_id'];
                    echo '<option value="'.$k.'">'.$k.'</option>';
                    }

                    ?>
                                
    
                    </select>
    
                    </div>

                        <div class="input-field">
                            <label>Item Name</label>
                            <input type="text" name="itemname" id="itemname"  required>
                        </div>



                        <div class="input-field"
                        <?php if(isset($email_error)):?> 
                        <?php endif ?> >

                            <label>Quantity</label>
                            <input type="number" name="qty"  id ="qty" required >
                             <?php if(isset($email_error)):?>
                    <span><?php echo $email_error; ?></span>
                <?php endif ?>

                        </div>



                        <div class="input-field">
                            <label>Rate</label>
                            <input type="text" name="cost" id="cost"  >
                        </div>



                        <div class="input-field">
                            <label>Amount</label>
                            <input type="text" name="amt" id="amt">
                        </div>
                        

                   
                        
 
                    </div>
                </div>
                
     
<div class="form-group">
<button type="submit" class="btn btn-primary" name="save">save</button>
</div>   


                </div>
            </div>
                    </form>
    </div>

    <script src="script.js"></script>
    <script src="dialog_script.js"></script>
</body>
</html>