<?php
$username = $_GET[''];

  $some_data = array(
    'userSecretKey'=>'h1d3ccrf-u2b8-cnm2-po2g-aes1cl2qmyi4',
    'categoryCode'=>'xgtxjj71',
    'billName'=>'Fund For Needs Check Out',
    'billDescription'=>'FundForNeeds CheckOut',
    'billPriceSetting'=>0,
    'billPayorInfo'=>1,
    'billAmount'=>100,
    'billReturnUrl'=>'http://localhost/MasterFundForNeeds/payment_status.php',
    'billCallbackUrl'=>'http://bizapp.my/paystatus',
    'billExternalReferenceNo' => 'AFR341DFI',
    'billTo'=>'John Doe',
    'billEmail'=>'jd@gmail.com',
    'billPhone'=>'0194342411',
    'billSplitPayment'=>0,
    'billSplitPaymentArgs'=>'',
    'billPaymentChannel'=>'0',
    'billContentEmail'=>'Thank you for purchasing our product!',
    'billChargeToCustomer'=>1
  );

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'https://dev.toyyibpay.com/index.php/api/createBill');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

  $result = curl_exec($curl);
  $info = curl_getinfo($curl);
  curl_close($curl);
  $obj = json_decode($result,true);
  $billcode = $obj[0]['BillCode'];
?>
<script type="text/javascript">   window.location.href = "https://dev.toyyibpay.com/<?php echo $billcode; ?>"; </script>
