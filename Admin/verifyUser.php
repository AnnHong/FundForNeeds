<?php
session_start();

if(isset($_POST['verifyUserButton'])){

  $email = $_SESSION['email'];

    $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
    $search = $con->query("SELECT email,user_verify FROM users WHERE email = '$email ' AND user_verify = 0 LIMIT 1");
    $match = mysqli_num_rows($search);
    if($match == 1){

      $update = $con->query("UPDATE users SET user_verify = 1 WHERE email ='$email'");

      if($update){
        echo"<script>
              alert('Your have verify the user successfully.');
              window.location.href='user_list.php';
              </script>";

      }else{
        echo $mysqli->error;
      }
    }
}


 ?>
