<?php
include "post.php";

session_start();

if(isSet($_POST['postbutton']) ){
  // echo $_SESSION['email'];
  $status = create_post();
  echo "<script>
  			alert('Your post is successfully posted!');
  			window.location.href='post_function.php';
  			</script>";
}
else{
  echo "Error";
}


 ?>
