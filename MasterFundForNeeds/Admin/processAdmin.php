<?php

include "user_list_function.php";
session_start();
  if(isSet($_POST['login']))
{
  login();


}else if(isSet($_POST['verify'])){
  verifyemailadmin();

  echo "<script>
        alert('Please go your email to verify.')
  			window.location.href='Admin_Login.php';
  			</script>";

}else if(isset($_POST['updateUser'])){

  $msg=UpdateUserInformation();
  header("Location:user_list.php");
}



function login()
{
        //print_r($_POST);
    //  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
      $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
      $admin_email = $_POST['admin_email'];
      $password = sha1($_POST['password']);

      if(!$con){
  			echo mysqli_error();
  		}else{
        	$sql = "select * from admin WHERE admin_email = '$admin_email' AND password = '$password'";
          $qry = mysqli_query($con,$sql);
          $count = mysqli_num_rows($qry);
          if($count == 1){
            $userRecord=mysqli_fetch_assoc($qry);
            $_SESSION['admin_email']=$userRecord['admin_email'];
            $_SESSION['password']=$userRecord['password'];
                echo "<script>
                			alert('You are log in. Welcome.');
                			window.location.href='Admin_Homepage.php';
                			</script>";;

            }else{
                echo "<script>
                      alert('Invalid email or password. Please try again.');
                      window.location.href='Admin_Login.php';
                      </script>";;

            }
      }
}

function verifyemailadmin(){

  $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
  if(!$con)
    {
    echo mysqli_error();
    }
  else
  {

    $admin_email = $_POST['admin_email'];
    $password = sha1($_POST['password']);
    $password_repeat = $_POST['repeat_password'];
    $admin_fullname = $_POST['admin_fullname'];
    $admin_staffid = $_POST['admin_staffid'];
    $token = md5( rand(0,1000) );

    $sql = "insert into admin(admin_email,password,token,admin_fullname,admin_staffid)
               values('$admin_email','$password','$token','$admin_fullname','$admin_staffid')";

      //echo $sql;
    //3.run insert query
    if(!mysqli_query($con,$sql))
    {
      //echo mysqli_error($con);
      return mysqli_error($con);
    }
    else{
        $to      = $admin_email; // Send email to our user
        $subject = 'Admin Email Verification'; // Give the email a subject
        $message = '

        Your admin email has been verified.

        ------------------------
        Email: '.$admin_email.'
        Password : '.$password_repeat.'
        ------------------------

        Please click this link to activate your account:
        http://localhost/MasterFundForNeeds/Admin/Admin_verify.php?admin_email='.$admin_email.'&token='.$token.'

        '; // Our message above including the link

        $headers = "From:noreply@fundforneeds.com\r\n"; // Set from headers
        mail($to, $subject, $message, $headers); // Send our email
      return "Record has been successfully added";
      header("Location:Admin_Login.php");

      }
  }
}


?>
