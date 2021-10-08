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
    $sql=”INSERT into blog_posts (post_title,content,author_name,post_date) values(‘”.$_POST[‘blogtitle’].”‘,'”.$_POST[‘content’].”‘,'”.$_POST[‘authorname’].”‘,now())”;

    if (!mysqli_query($con,$sql))
    {
      die(‘Error: ‘ . mysqli_error($con));
    }
    echo “1 record added”;

  }
?>
