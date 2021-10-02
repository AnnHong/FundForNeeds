<?php
$con = mysqli_connect("localhost", "fundforneeds", "fundforneeds", "fundforneeds");
if(!$con){
  echo mysqli_error();
}
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file_name"]["file_name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["upload_button"]) && !empty($_FILES["file_name"]["file_name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file_name"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql = "insert into users(file_name) values('$fileName')";
            if($sql){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>
