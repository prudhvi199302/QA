<?php

$data = json_decode(file_get_contents("php://input"));
$amount = $data->amount;
$count = $data->quant;
echo 'freshbasket',
exit

$con = mysqli_connect("localhost","root","","coupons");

$result = mysqli_query($con, "INSERT INTO `coupons`(`Amount`, `Quantity`, `Expdate`, `GenDate`) VALUES ('".$amount."','".$count."',NOW(),DATE_ADD(NOW(),INTERVAL 30 DAY))");

mysqli_close($con);

?>
