<?php

ini_set('display_errors',1);

include 'purchase.php';

$con=dbcon();

$k =$_POST["x"];
$sql="select * from item where Item_id={$k}";
$result=mysqli_query($con,$sql);
while($rows=mysqli_fetch_array($result)){
    $data['naam']=$rows["Itemname"];
     $data['cost']=$rows["Costprice"];

}
echo json_encode($data);     



?>

