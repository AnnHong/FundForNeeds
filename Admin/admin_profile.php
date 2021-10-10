<?php
session_start();
$admin = $_SESSION['admin_email'];

function getAdminInformation($admin){
$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql='SELECT * from admin where admin_email = "'.$admin.'"';
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
    <a href="Admin_HomePage.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius: 15px 15px;"><i class="fa fa-home w3-margin-right"></i> <b>Fund For Needs</b> </a>
    <a href="admin_history.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Donation History" style="border-radius: 15px 15px;"><i class="fa fa-globe"></i></a>
    <a href="user_list.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="User List" style="border-radius: 15px 15px;"><i class="fa fa-user"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Messages" style="border-radius: 15px 15px;"><i class="fa fa-envelope"></i></a>

    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button w3-padding-large w3-hover-white" title="Notifications" style="border-radius: 15px 15px;"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-green">0</span></button>

      <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px;border-radius: 25px 25px;">
      <a href="#" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">You have no notification yet.</a>
      </div>
    </div>

  <div class="w3-dropdown-hover w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" style="border-radius: 15px 15px;">
      <img src="avatar2.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
      <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:150px;right:0px;border-radius: 25px 25px;">
        <a href="admin_profile.php" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">My Profile</a>
        <a href="Admin_Login.php" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">Sign Out</a>
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

									$admin_email = $_SESSION['admin_email'];

    							$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
    							$q = mysqli_query($con,'SELECT * FROM admin WHERE  admin_email ="'.$admin_email.'" ');
    							while($row=mysqli_fetch_assoc($q)){
      						//echo $row ['username'].'<br>';
      							if($row['image_admin']==''){
        							echo "<img width='140' height='140' src='admin_pictures/default.jpg' alt='Default Profile Pic'>";
      							}else{
                    	echo "<img width='140' height='140' src='admin_pictures/".$row['image_admin']."' alt='Profile Pic'>";
                		}
    							}
   							?>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <?php

                    $qryAdminData = getAdminInformation($_SESSION['admin_email']);
                    $adminRecord = mysqli_fetch_assoc($qryAdminData);
                        echo '<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">' .$adminRecord['admin_fullname']. '</h4>' ;
                        echo '<p class="mb-0">@'.$adminRecord['admin_staffid']. '</p>';

                        ?>
												<div class="mt-2">
													<div>
		                      <button class="btn" id="myBtn" type="submit" name="changePic"style="background-color:#ff7a7a; color: white;border-radius:75px 25px;">
		                        <i class="fa fa-fw fa-camera"></i>
		                        <span>Change Photo</span>
		                      </button>
													<div id="myModal" class="modal">
														<!-- Modal content -->
														<div class="modal-content" style=" text-align:right !important;">
															<span class="close">&times;</span>
															<input type="file" name="image_admin" value="upload your profile picture" id="upload" hidden>
															<div style="display:inline-block;text-align:center;">
																<form action="upload_pic.php" method="post" enctype="multipart/form-data">
																	<b><p>Please upload your profile picture.</p></b>
																	<input type="file" id="myFile" name="image_admin" style="margin:0 0 25px 80px;">
																	<input type="submit" name ="uploadPicAdmin_button" class="btn">
																</form>
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
														modal.style.display = "none";
													}

													// When the user clicks anywhere outside of the modal, close it
													window.onclick = function(event) {
														if (event.target == modal) {
															modal.style.display = "none";
														}
													}
													</script>
		                    </div>
											</div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary" style="background-color:#ff7a7a; color: white;">Front-end Programmer</span>
                    <div class="text-muted"><small>Joined 07 June 2021</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile Information</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" action= "update_profile_admin.php" method="POST">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Full Name</label>
                              <?php
                                  echo '<input class="form-control" type="text" id="fullname" name= "admin_fullname" style="border-radius:25px 25px;" value="'.$adminRecord['admin_fullname'].'" disabled>' ;
                                  ?>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Staff ID</label>
                              <?php
                                  echo '<input class="form-control" type="text" id="staffid" name="admin_staffid" style="border-radius:25px 25px;" value="'.$adminRecord['admin_staffid'].'" disabled>' ;
                                  ?>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <?php
                                  echo '<input class="form-control" id="currentpassword" style="border-radius:25px 25px;" type="password" value="'.$adminRecord['password'].'" disabled>' ;
                              ?>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <?php
                                  echo '<input class="form-control" type="text" id="email" style="border-radius:25px 25px;" value="'.$adminRecord['admin_email'].'" disabled>' ;
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
                              <input class="form-control" id="newpassword" name="newpassword" type="password" style="border-radius:25px 25px;" minlength="8" maxlength="16" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" id="confirmpassword" name="confirmpassword" type="password" style="border-radius:25px 25px;" minlength="8" maxlength="16" disabled></div>
															<input type="checkbox" onclick="newFunction()" id="showpassword" disabled> Show Password<br>
                          </div>
                        </div>
                      </div>
                    </div>
										<div style="float:left;">
											<button class="btn" type="button" style="background-color:#ff7a7a; color: white;border-radius:75px 25px;"name="UpdatePassAdminBtn" onclick="updatePassword()">Update Password</button>
											<button class="btn" id="chgpass" type="submit" style="background-color:#ff7a7a; color: white;border-radius:75px 25px;margin-left:25px;"name="ChangePassAdminBtn" disabled>Change Password</button>
										</div>
											<div style="float:right;">
												<button class="btn" type="button" style="background-color:#ff7a7a; color: white; margin-right:25px;border-radius:75px 25px;"  onclick="updateFunction()">Update Profile</button>
												<button class="btn" id="save" type="submit" style="background-color:#ff7a7a; color: white;border-radius:75px 25px;" name="updateAdminBtn" disabled>Save Changes</button>
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
				document.getElementById('staffid').disabled = !document.getElementById('staffid').disabled;
				document.getElementById('save').disabled = !document.getElementById('save').disabled;
			}

			function updatePassword(){
				document.getElementById('newpassword').disabled = !document.getElementById('newpassword').disabled;
				document.getElementById('confirmpassword').disabled = !document.getElementById('confirmpassword').disabled;
				document.getElementById('showpassword').disabled = !document.getElementById('showpassword').disabled;
				document.getElementById('chgpass').disabled = !document.getElementById('chgpass').disabled;
			}

			function check(input) {
        if (input.value != document.getElementById('newpassword').value) {
            input.setCustomValidity('Password Must be Matching.');
        }
    }

		function newFunction() {
      var x = document.getElementById("newpassword");
			var y = document.getElementById("confirmpassword");

      if (x.type === "password") {
        x.type = "text";
				y.type = "text";

      } else {
        x.type = "password";
				y.type = "password";
      }
    }

			</script>
<div>
  <footer class="w3-container w3-theme-d2 w3-padding-16">
  <div style="text-align:center;">
    <a href="login_tnc.php" style="color:white;">Terms and Conditions</a>&emsp;
    <a href="login_aboutus.php" style="color:white;">About Us</a>&emsp;
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
