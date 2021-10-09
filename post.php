<?php
if(isset($_POST['confirmbtn']))
{
  add_post();
}

function add_post(){

	$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

  if(!$con){
    echo mysqli_error();
  }else{

    $email=$_POST['email'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) >0){

      $post = time(). md5($email);
      $sql = "INSERT users SET post='$post' WHERE email='$email'";
    }
    if (!mysqli_query($con,$sql))
    {
      die(‘Error: ‘ . mysqli_error($con));
    }
    else{ echo “1 record added”;
    }
  }
}
?>
