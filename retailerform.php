<?php include('retailprocess.php')?>
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

    <title>Add Retailer Company | IMS </title>
 

</head>




<body>
    <div class="container">
        <header>Add retail Company</header>

 <form action="retailerform.php" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Company Details</span>

                    <div class="fields">


                        <div class="input-field"
                        <?php if(isset($email_error)):?>
                            <?php endif ?> >
                            <label>Pan Number</label>
                            <input type="number" name="id"  required>
                            <?php if(isset($email_error)):?>
                                <span><?php echo $email_error; ?></span>
                            <?php endif ?>
                        </div>

                        <div class="input-field">
                            <label>Name of the Company</label>
                            <input type="text" name="name" required>
                        </div>

                         <div class="input-field">
                            <label>Owner of the Company</label>
                            <input type="text" name="owner" required>
                        </div>


                         <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address"  required>
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