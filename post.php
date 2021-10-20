<?php
session_start();
  function create_post()
  {
    $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

    if(!$con){
      echo mysqli_error();
    }
    else{
      $User_Email = $_SESSION['email'];
      $post_content = $_POST['post'];
      $date = date('Y/m/d h:i:s');
      $sql = "insert into posts(User_Email, Post_Content, Post_Date) values('$User_Email', '$post_content', '$date')";

      if(!mysqli_query($con, $sql)){
        return mysqli_error($con);
      }
      else{
        return true;
      }
    }
  }
?>
