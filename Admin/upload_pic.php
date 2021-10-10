<?php
session_start();

if(isset($_POST['uploadPicAdmin_button'])){

        move_uploaded_file($_FILES['image_admin']['tmp_name'],"admin_pictures/".$_FILES['image_admin']['name']);
        $con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");

        if(!$con){
          echo mysqli_error();
        }else{
          $admin_email =$_SESSION['admin_email'];
          $q = mysqli_query($con,"UPDATE admin SET image_admin = '".$_FILES['image_admin']['name']."' WHERE admin_email = '".$admin_email."'");
          echo "<script>
                  alert('Image admin sucessfully upload');
                  window.location.href='admin_profile.php';
                  </script>";;;
        }

}

?>
