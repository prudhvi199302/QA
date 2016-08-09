<?php

//json_decode command reads the data as a string
$Postdata = file_get_contents("php://input");
$data = json_decode($Postdata);
$fname = $data->fname;
$mname = $data->mname;
$lname = $data->lname;
$addr1 = $data->addr1;
$addr2 = $data->addr2;
$city = $data->city;
$state = $data->state;
$zip = $data->zip;
$cn = $data->cn;
$email = $data->email;
$Whatsapp = $data->Whatsapp;
$Emailcheck = $data->Emailcheck;
$SMS = $data->SMS;

//database connections
$link = mysqli_connect("localhost", "root", "harsha143", "Custinfo");


mysqli_query($link, "INSERT INTO Customerinfo
  (`Firstname`, `Middlename`, `Lastname`, `Address1`, `Address2`, `City`, `State`, `Zip`, `Contact`, `Email`, `Whatsapp`, `Emailcheck`, `SMS` )
  VALUES('".$fname."','".$mname."','".$lname."','".$addr1."','".$addr2."','".$city."','".$state."','".$zip."','".$cn."','".$email."','".$Whatsapp."','".$Emailcheck."','".$SMS."')");

mysqli_close($link);

?>
