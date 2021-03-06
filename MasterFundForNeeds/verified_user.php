<?php
session_start();
$email = $_SESSION['email'];

function getUserInformation($email){
$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql='select * from users where email = "'.$email.'"';
		$qry=mysqli_query($con,$sql);
		return $qry;
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index_theme.css">
    <link rel='stylesheet' href='index_font.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>My Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    /* Add animation to "page content" */
		.animate-bottom {
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

    .verified{
      display: inline-block;
      background-color: blue;
      color: white;
      padding: 0 10px 0 10px;
      font-family: sans-serif;
      border-radius: 50px;
    }

    .icon{
      position: absolute;
      top:123px;
      height: 15px;
      width:15px;
      border-radius: 50%;
    }

    body{
        margin-top:25px;
    }
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 25%;
    }

    /* The Close Button */
    .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    color: red;
    }

    .close:hover, .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    }
    </style>
</head>
<body class="animate-bottom">
  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a href="user_index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius:15px 15px;"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
    <a href="donation_history.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Donation History" style="border-radius:15px 15px;"><i class="fa fa-globe"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages" style="border-radius:15px 15px;"><i class="fa fa-envelope"></i></a>

    <div class="w3-dropdown-hover w3-hide-small" >
      <button class="w3-button w3-padding-large w3-hover-white" title="Notifications" style="border-radius:15px 15px;"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">3</span></button>

      <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px;border-radius:25px 25px;">
        <a href="#" class="w3-bar-item w3-button" style="border-radius:25px 25px;">One new friend request</a>
        <a href="#" class="w3-bar-item w3-button" style="border-radius:25px 25px;">Ann Hong posted on your wall</a>
        <a href="#" class="w3-bar-item w3-button" style="border-radius:25px 25px;">Zhi Hao Donates your post</a>
      </div>
    </div>

  <div class="w3-dropdown-hover w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" style="border-radius:15px 15px;">
      <img src="avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
      <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:150px;right:0px;border-radius:25px 25px;">
        <a href="verified_user.php" class="w3-bar-item w3-button" style="border-radius:25px 25px;text-align:center;">My Profile</a>
        <a href="index.php" class="w3-bar-item w3-button" style="border-radius:25px 25px;text-align:center;">Sign Out</a>
      </div>
    </div>
   </div>
  </div>
  <br><br>
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <?php

									$email = $_SESSION['email'];

    							$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
    							$q = mysqli_query($con,'SELECT * FROM users WHERE  email ="'.$email.'" ');
    							while($row=mysqli_fetch_assoc($q)){
      						//echo $row ['username'].'<br>';
      						if($row['image']==''){
        						echo "<img width='140' height='140' src='../user_photos/default.jpg' alt='Default Profile Pic'>";
      						}else{
                    echo "<img width='140' height='140' src='../user_photos/".$row['image']."' alt='Profile Pic'>";
                		}
    							}
   							?>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <?php

                    $qryUserData = getUserInformation($_SESSION['email']);
                    $userRecord = mysqli_fetch_assoc($qryUserData);
                        echo '<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">' .$userRecord['fullname']. '</h4>' ;
                        echo '<p class="mb-0">@'.$userRecord['usernames']. '</p>';

                        ?>
                    <div class="mt-2">
                      <div>
                      <button id="myBtn" class="btn" type="file" style="background-color:#80daeb; color: white;border-radius:75px 25px;">
                        <i class="fa fa-fw fa-camera"></i>
                        <span type="file">Change Photo</span>
                      </button>
                      <div id="myModal" class="modal">
												<!-- Modal content -->
												<div class="modal-content" style=" text-align:right !important;">
													<span class="close">&times;</span>
													<input type="file" name="image" value="upload your profile picture" id="upload" hidden>
													<div style="display:inline-block;text-align:center;">
														<form action="upload_img2.php" method="post" enctype="multipart/form-data">
															<b><p>Please upload your profile picture.</p></b>
															<input type="file" id="myFile" name="image" style="margin:0 0 25px 80px;">
															<input type="submit" name ="uploadPicVerified_button" class="btn">
														</form>
													</div>
												</div>
											</div>
                    </div>
                    <script>
                // Get the modal
                var modal = document.getElementById("myModal");
                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");
                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                btn.onclick = function() {
                  modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none" ;
                //	modal2.style.display ="none" ;
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";

                  }
                }

                </script>
</div>
                    <div style="margin-top:15px;">
                      <label class="verified"><img src="check.png" alt="verified" class="icon">&emsp; Verified</label>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile Information</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" action= "update_function.php" method="POST">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Full Name</label>
                              <?php
                                  echo '<input class="form-control" type="text" id="fullname" name="fullname" style="border-radius:25px 25px;" value="'.$userRecord['fullname'].'" disabled>' ;
                              ?>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <?php
                                  echo '<input class="form-control" type="text" id="username" name="usernames" style="border-radius:25px 25px;" value="'.$userRecord['usernames'].'" disabled>' ;
                              ?>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Phone Number</label>
                              <?php
                              echo '<input class="form-control" type="text" style="border-radius:25px 25px;" id="paypal" name = "phoneNumber" value="'.$userRecord['phoneNumber'].'" disabled>';
                              ?>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <?php
                                  echo '<input class="form-control" type="text" name="email" style="border-radius:25px 25px;" value="'.$userRecord['email'].'" disabled>' ;
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" name="newpassword" id="newpassword" style="border-radius:25px 25px;" minlength="8" maxlength="16" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" type="password" name="confirmpassword" id="confirmpassword" style="border-radius:25px 25px;" minlength="8" maxlength="16" oninput="check(input)" disabled></div>
                              <input type="checkbox" onclick="newFunction()" id="showpassword" disabled> Show Password<br>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
											<div style="float:left;">
												<button class="btn" type="button" style="background-color:#80daeb; color: white;border-radius:75px 25px;"name="UpdatePassBtn" onclick="updatePassword()">Update Password</button>
												<button class="btn" id="chgpass" type="submit" style="background-color:#80daeb; color: white;border-radius:75px 25px;margin-left:25px;"name="ChangePassBtn_verified" disabled>Change Password</button>
											</div>
												<div style="float:right;">
													<button class="btn" type="button" style="background-color:#80daeb; color: white; margin-right:25px;border-radius:75px 25px;"  onclick="updateFunction()">Update Profile</button>
		                      <button class="btn" id="save" type="submit" style="background-color:#80daeb; color: white;border-radius:75px 25px;" name="SaveBtn_verified" disabled>Save Changes</button>
												</div>
									  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
			<script type="text/javascript">
			function updateFunction() {
				document.getElementById('fullname').disabled = !document.getElementById('fullname').disabled;
				document.getElementById('username').disabled = !document.getElementById('username').disabled;
				document.getElementById('paypal').disabled = !document.getElementById('paypal').disabled;
				document.getElementById('save').disabled = !document.getElementById('save').disabled;
			}

			function updatePassword(){
				document.getElementById('newpassword').disabled = !document.getElementById('newpassword').disabled;
				document.getElementById('confirmpassword').disabled = !document.getElementById('confirmpassword').disabled;
				document.getElementById('showpassword').disabled = !document.getElementById('showpassword').disabled;
				document.getElementById('chgpass').disabled = !document.getElementById('chgpass').disabled;
			}

			function check(input) {
				if (input.value = document.getElementById('newpassword').value) {
						input.setCustomValidity('Password Must be Matching.');
				}
		}
		function newFunction() {

      var x = document.getElementById("newpassword");
      var y = document.getElementById("confirmpassword");
      var z = document.getElementById("myInput");

      if (x.type === "password") {
        x.type = "text";
        y.type = "text";
        z.type = "text";
      } else {
        x.type = "password";
        y.type = "password";
        z.type = "password";
      }
    }
			</script>
<div>
  <footer class="w3-container w3-theme-d2 w3-padding-16">
  <div style="text-align:center;">
    <a href="user_tnc.php" style="color:white;text-shadow: 2px 2px 20px #000000;">Terms and Conditions</a>&emsp;
    <a href="user_contactus.php" style="color:white;text-shadow: 2px 2px 20px #000000;">Contact Us</a>&emsp;
    <a href="user_aboutus.php" style="color:white;text-shadow: 2px 2px 20px #000000;">About Us</a>&emsp;
  </div>
  </footer>
  <footer class="w3-container w3-theme-d5">
    <div class="copyright" align="center">
    <script>
      document.write('&copy;' );
      document.write(' 2021 - ');
      document.write(new Date().getFullYear());
      document.write(' Fund For Needs - All Rights Reserved.');
      document.write('<br/>Last Updated : ');
      document.write(document.lastModified);
    </script>
  </div>
  </footer>
</div>
</body>
</html>
