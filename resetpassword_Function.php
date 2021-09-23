<?php
if(isset($_POST['resetbtn']))
{
  resetpassword();
}


function resetpassword()
{

	$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

if(!$con){
  echo mysqli_error();
}else{
  $email=$_POST['email'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($con,$sql);

  if(mysqli_num_rows($result) >0){

    $reset_token = time(). md5($email);
    $sql = "UPDATE users SET reset_token='$reset_token' WHERE email='$email'";


    if(!mysqli_query($con,$sql))
    {
      //echo mysqli_error($con);
      return mysqli_error($con);

    }else{
      $to      = $email; // Send email to our user
      $subject = 'Reset Password'; // Give the email a subject
      $message = '


      You are one step away from resetting your password.

      Please click this link to reset the password:
      http://localhost/MasterFundForNeeds/resetpassword.php?email='.$email.'&reset_token='.$reset_token.'

      '; // Our message above including the link

      $headers = "From:noreply@fundforneeds.com\r\n"; // Set from headers
      mail($to, $subject, $message, $headers); // Send our email

      echo  "<script>
              alert('The reset password link is sent to your email.Please check your email.');
              window.location.href='user_signin.php';
              </script>";;

    }

  }else{
    echo "Email does not exists";
  }
}


}
?>
