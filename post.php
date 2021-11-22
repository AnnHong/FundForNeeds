<?php
function create_post(){

  $con=  mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
  if(!$con){
    echo mysqli_error();
  }
  else{
    $User_Email = $_SESSION['email'];
    $post_content = $_POST['post'];
    $sql = "insert into posts(User_Email, Post_Content) values('$User_Email', '$post_content')";
    //
    if(!mysqli_query($con, $sql)){
      return mysqli_error($con);
    }
    else{
      return true;
    }
  }
}

?>
