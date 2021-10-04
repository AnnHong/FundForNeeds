<?php
session_start();

  if(isSet($_POST['login']))
{
  login();

  /*echo "<script>
        alert('You are logged in.Welcome.')
  			window.location.href='Admin_HomePage.php';
  			</script>";*/

}else if(isSet($_POST['verify'])){
  verifyemailadmin();

  echo "<script>
        alert('Please go your email to verify.')
  			window.location.href='Admin_Login.php';
  			</script>";

}

function login()
    {
        //print_r($_POST);
        $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

        if(mysqli_connect_errno()) {
               die("Failed to connect with MySQL: ". mysqli_connect_error());
           }





      $admin_email = $_POST['admin_email'];
      $password = $_POST['password'];
      //to prevent from mysqli injection
      $admin_email = stripcslashes($admin_email);
      $password = stripcslashes($password);
      $admin_email = mysqli_real_escape_string($con, $admin_email);
      $password = mysqli_real_escape_string($con, $password);

			$sql = "select * from admin WHERE admin_email = '$admin_email' AND password = '$password'";

      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

			if($count==1){
        echo "<script>
        alert('You are logged in.Welcome.')
        window.location.href='Admin_HomePage.php';
          </script>";
				//header("Location: Admin_HomePage.html");
			}else{
			  echo "<script>
        alert(' Login failed. Invalid username or password..')
        window.location.href='Admin_Login.php';
          </script>";
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
    $password = $_POST['password'];
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
        Password : '.$password.'
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
