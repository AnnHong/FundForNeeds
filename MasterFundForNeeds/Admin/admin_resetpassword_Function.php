<?php
if(isset($_POST['adminresetbtn']))
{
  adminresetpassword();
}


function adminresetpassword()
{

	$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{
  $admin_email=$_POST['admin_email'];

$sql = "SELECT * FROM admin WHERE admin_email='$admin_email'";
$result = mysqli_query($con,$sql);

  if(mysqli_num_rows($result) >0){

    $reset_token = time(). md5($admin_email);
    $sql = "UPDATE admin SET reset_token='$reset_token' WHERE admin_email='$admin_email'";


    if(!mysqli_query($con,$sql))
    {
      //echo mysqli_error($con);
      return mysqli_error($con);

    }else{
      $to      = $admin_email; // Send email to our user
      $subject = 'Admin Reset Password'; // Give the email a subject
      $message = '


      You are one step away from resetting your password.

      Please click this link to reset the password:
      http://localhost/MasterFundForNeeds/Admin/resetpassword_email.php?admin_email='.$admin_email.'&reset_token='.$reset_token.'

      '; // Our message above including the link

      $headers = "From:noreply@fundforneeds.com\r\n"; // Set from headers
      mail($to, $subject, $message, $headers); // Send our email

      echo  "<script>
              alert('The reset password link is sent to your email.Please check your email.');
              window.location.href='Admin_Login.php';
              </script>";;

    }

  }else{
    echo "Email does not exists";
  }
}


}
?>
