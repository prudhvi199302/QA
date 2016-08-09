<?php

//json_decode command reads the data as a string
$Postdata = file_get_contents("php://input");
$data = json_decode($Postdata);
$order = $data['order'];
$currentdate = $data['currentdate'];
$streetname = $data['streetname'];
$cityname = $data['cityname'];
$areacode = $data['areacode'];
$amt = $data['amt'];
$salesamt = $data['salesamt'];
$totalamt = $data['totalamt'];
$deliveryname = $data['deliveryname'];

//database connections
$link = mysqli_connect("localhost", "root", "jaga123", "jaga1");
if(!$link){
  echo "failed to connect to database";
}

 mysqli_query($link, "INSERT INTO deliveryperson
  (`orderId`, `orderdate`, `Address`,`city`, `areacode`,   `Amount`, `Salestax`, `Totalamount`,  `deliveryperso` )
  VALUES('".$order."','".$currentdate."','".$streetname."','".$cityname."','".$areacode."','".$amt."','".$salesamt."','".$totalamt."','".$deliveryname."')");

mysqli_close($link);
?>

