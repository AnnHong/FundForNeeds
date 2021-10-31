<?php
include "post.php";

session_start();

if(isset($_POST['postButton'])){
    //echo $_SESSION['id']
    $post_result = create_post();
    header("Location:user_index.php");
}

 ?>
