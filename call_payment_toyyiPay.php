<?php
$email = $_GET['email'];

function getUserInformation($email){
$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql='select * from users where email = "'.$email.'"';
		$qry=mysqli_query($con,$sql);
		return $qry;
	}
}

  $qryUserData = getUserInformation($_GET['email']);
  $userRecord = mysqli_fetch_assoc($qryUserData);


  $some_data = array(
    'userSecretKey'=>'h1d3ccrf-u2b8-cnm2-po2g-aes1cl2qmyi4',
    'categoryCode'=>'xgtxjj71',
    'billName'=>'Fund For Needs Check Out',
    'billDescription'=>'Donation',
    'billPriceSetting'=>0,
    'billPayorInfo'=>1,
    'billAmount'=>100,
    'billReturnUrl'=>'http://localhost/MasterFundForNeeds/payment_status.php',
    'billCallbackUrl'=>'http://bizapp.my/paystatus',
    'billExternalReferenceNo' => 'AFR341DFI',
    'billTo'=>$userRecord['fullname'],
    'billEmail'=>$email,
    'billPhone'=>$userRecord['phoneNumber'],
    'billSplitPayment'=>0,
    'billSplitPaymentArgs'=>'',
    'billPaymentChannel'=>'0',
    'billContentEmail'=>'Good news! You have received a donation!',
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
<script type="text/javascript">
  window.location.href = "https://dev.toyyibpay.com/<?php echo $billcode; ?>";
</script>
