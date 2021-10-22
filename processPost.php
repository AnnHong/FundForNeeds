<?php
include "post.php";

session_start();


if(isset($_POST['postButton'])){
    //echo $_SESSION['id']
    $post_result = create_post();
header("Location:user_index.php");
    if($post_result== ""){

      die;

    }else{
      echo "<div style='text-align:center;font-size:12px;color:white;backgroud-color:grey;'>";
      echo "<br><The following errors occured:<br><br>";
      echo $post_result;
      echo "</div>";
    }
  //$User_Email = $_SESSION['email'];


    //echo $post_display;

}



 ?>
