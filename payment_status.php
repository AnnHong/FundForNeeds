<?php
session_start();
$email= $_SESSION['email'];
// status : Payment status. 1= success, 2=pending, 3=fail
$billcode = $_GET['billcode'];
  $some_data = array(
    'billCode' =>$billcode,
    'billpaymentStatus' => ''
  );

  $curl = curl_init();

  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'https://dev.toyyibpay.com/index.php/api/getBillTransactions');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

  $result = curl_exec($curl);
  $info = curl_getinfo($curl);
  curl_close($curl);

  $result = json_decode($result, true);
  $billpaymentStatus = $result[0]['billpaymentStatus'];
  $billTo = $result[0]['billTo'];
  $billEmail = $result[0]['billEmail'];
  //$billPhone = $result[0]['billPhone'];
  $billpaymentAmount = $result[0]['billpaymentAmount'];
  $billpaymentInvoiceNo = $result[0]['billpaymentInvoiceNo'];

  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");


    if($billpaymentStatus == 1 ){
      $sql = "insert into payment_history(Transaction_ID,User_email	,username_receiver,email_receiver,amount_donation,status)
  						   values('$billpaymentInvoiceNo','$email','$billTo','$billEmail','$billpaymentAmount','$billpaymentStatus')";

      header("Location:payment_succeed.php");

    }else if($billpaymentStatus == 3){
      header("Location:payment_failed.php");
   }else{
     echo "pending";
   }



?>
