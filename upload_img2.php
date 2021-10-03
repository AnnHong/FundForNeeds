<?php
session_start();

if(isset($_POST['upload_button'])){
  $con = mysqli_connect("localhost", "fundforneeds", "fundforneeds", "fundforneeds");
  if(!$con){
    echo mysqli_error();
  }else{
    $email = $_SESSION['email'];
    $file = rand(1000,100000)."-".$_FILES['file_name']['name'];
    $file_loc = $_FILES['file_name']['tmp_name'];

    $folder="C:/xampp/htdocs/uploads/";

    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */

    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file)){
      //"UPDATE users SET reset_token='$reset_token' WHERE email='$email'";
      $sql="UPDATE users SET file_name ='$final_file' WHERE email ='$email'";
      mysqli_query($con,$sql);


      echo "<script>
              alert('File sucessfully upload');
              window.location.href='user_profile.php';
              </script>";;;
    }else{

      echo "Error.Please try again";
    }
	}
}
?>
