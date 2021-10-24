<?php
//session_start();

  function create_post(){

   $con=  mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
   if(!$con){
     echo mysqli_error();
   }else{

      $User_Email = $_SESSION['email'];
     //$User_Id = $_SESSION['User_Id'];
     $post_content = $_POST['post'];
     //$date = date('Y/m/d h:i:s');
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

// function get_posts(){
//   $con=  mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
//
//     $User_Email = $_SESSION['email'];
//   $sql = "select * from posts where User_Email = '$User_Email'";
//
//   $result = mysqli_query($con,$sql);
// }





// private function create_postid()
// {
//   $length = rand(4,19);
//   $number = "";
//   for($i=0;$i<$length; $i++){
//     #code...
//     $new_rand =rand(0,9);
//     $number =$number . $new_rand;
//   }
//   return $number;
// }

?>
