<?php

ini_set('display_errors',1);

include 'purchase.php';

$con=dbcon();

$p=$_POST["y"];
$sql="select * from retailer where Pan_num={$p}";
$result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($result)){
    $data['cnaam']=$rows["Companyname"];
     

}
echo json_encode($data);     

?>


