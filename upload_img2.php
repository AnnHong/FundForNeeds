<?php
if(isset($_POST['upload_button'])){
  $con = mysqli_connect("localhost", "fundforneeds", "fundforneeds", "fundforneeds");
  if(!$con){
    echo mysqli_error();
  }else{
    $file = rand(1000,100000)."-".$_FILES['file_name']['name'];
    $file_loc = $_FILES['file_name']['tmp_name'];

    $folder="uploads/";

    /* make file name in lower case */
    $new_file_name = strtolower($file);
    /* make file name in lower case */

    $final_file=str_replace(' ','-',$new_file_name);

    if(move_uploaded_file($file_loc,$folder.$final_file)){
      $sql="INSERT INTO users(file_name) VALUES('$final_file')";
      mysqli_query($con,$sql);

      echo "File sucessfully upload";
    }else{

      echo "Error.Please try again";
    }
	}
}
?>
