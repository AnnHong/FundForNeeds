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
  $billPhone = $result[0]['billPhone'];
  $billpaymentAmount = $result[0]['billpaymentAmount'];
  $billpaymentInvoiceNo = $result[0]['billpaymentInvoiceNo'];

  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

    if($billpaymentStatus == 1 ){
       $query = mysqli_query($con, "SELECT * FROM users WHERE email='$billEmail' ");
       $row = mysqli_fetch_array($query);
       $fullname = $row['fullname'];

       $query2 = mysqli_query($con, "SELECT * FROM users WHERE email='$email' ");
       $row2 = mysqli_fetch_array($query2);
       $User_fullname = $row2['fullname'];

      $sql = "insert into payment_history(Transaction_ID,User_email,User_fullname,fullname_receiver,email_receiver,phoneNumber_receiver,amount_donation,status)
  						   values('$billpaymentInvoiceNo','$email','$User_fullname','$fullname','$billEmail','$billPhone','$billpaymentAmount','$billpaymentStatus')";
      if($con->query($sql)==TRUE){
        header("Location:payment_succeed.php");
      }
    }else if($billpaymentStatus == 3){
      header("Location:payment_failed.php");
   }else{
     echo "pending";
   }
?>
