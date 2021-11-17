<!DOCTYPE html>
<html>
<head>
</head>
<title>Donation History</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
/* Add animation to "page content" */
.animate-bottom{
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 }
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom {
  from{ bottom:-100px; opacity:0 }
  to{ bottom:0; opacity:1 }
}
html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}

details > summary{
  cursor:pointer;
}

.pay{
  color:#012269;
}

.pal{
  color:#019CDE;
}

.success{
  color: #28a745;
}

.fail{
  color: red;
}
</style>
<body class="animate-bottom">
<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="Admin_HomePage.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius: 15px 15px;"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
  <a href="admin_history.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Donation History" style="border-radius: 15px 15px;"><i class="fa fa-globe"></i></a>
  <a href="user_list.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="User List" style="border-radius: 15px 15px;"><i class="fa fa-user"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages" style="border-radius: 15px 15px;"><i class="fa fa-envelope"></i></a>

  <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button w3-padding-large w3-hover-white" title="Notifications" style="border-radius: 15px 15px;"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>

    <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px;border-radius: 25px 25px;">
      <a href="#" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">One new friend request</a>
      <a href="#" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">Ann Hong posted on your wall</a>
      <a href="#" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">Zhi Hao Donated you</a>
      <a href="#" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">Sheng Earn Donated you</a>
    </div>
  </div>

<div class="w3-dropdown-hover w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" style="border-radius: 15px 15px;">
    <img src="avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">

    <div class="w3-dropdown-content w3-card-4 w3-bar-block w3-hover-white" style="width:150px;right:0px;border-radius: 25px 25px;">
      <a href="admin_profile.php" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">My Profile</a>
      <a href="Admin_Login.php" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">Sign Out</a>
    </div>
  </div>
 </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<?php
$con=  mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
if(!$con){
  echo mysqli_error();
}
else{
  $sql = 'select * from payment_history';
  if(!mysqli_query($con, $sql)){
    return mysqli_error($con);
  }
  else{
    $q = mysqli_query($con, $sql);
    $datas = mysqli_fetch_all($q);
    echo '<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
      <h1 style="text-align:center;">User Donation History</h1></div>';

      foreach($datas as $data){ // call count_array for post table
      include "admin_history_detail.php";
      // var_dump($data);
    }
  }
}
 ?>

<br>
</body>
</html>
