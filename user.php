<?php

function addnewuser()
{
  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds_dbproject");

  if(!$con){
    echo mysqli_error();
  }else{
    $email = $_POST['email'];
    $psw = $_POST['psw'];
    $psw_repeat = $_POST['psw_repeat'];

$sql = "insert into user (email,psw,psw_repeat) values ('$email','$psw','$psw_repeat')";
    //$sql = "INSERT INTO user (email, psw,psw_repeat)VALUES ('$email','$psw','$psw_repeat')";
    echo $sql;

  }

  if (!mysqli_query($con,$sql))
  {

    return mysqli_error($con);
  }else{

    return "Record has been successfully added.";
  }
}
 ?>
