<?php
session_start();
$admin_email = $_SESSION['admin_email'];

function getAdminInformation($admin_email){
$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
	if(!$con)
		{
		echo mysqli_error();
		}
	else
	{
		//echo 'connected';
		$sql='select * from admin where admin_email = "'.$admin_email.'"';
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
        <a href="Admin_HomePage.php" class="w3-bar-item w3-button" style="border-radius: 25px 25px;">Sign Out</a>
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
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
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
                      <button class="btn" type="submit" style="background-color:#ff7a7a; color: white;">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary" style="background-color:#ff7a7a; color: white;">Front-end Programmer</span>
                    <div class="text-muted"><small>Joined 07 June 2021</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Full Name</label>
                              <?php
                                  echo '<input class="form-control" type="text" id="fullname" value="'.$adminRecord['admin_fullname'].'" disabled>' ;
                                  ?>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Staff ID</label>
                              <?php
                                  echo '<input class="form-control" type="text" id="staffid"  value="'.$adminRecord['admin_staffid'].'" disabled>' ;
                                  ?>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <?php
                                  echo '<input class="form-control" id="currentpassword" type="password" value="'.$adminRecord['password'].'" disabled>' ;
                              ?>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <?php
                                  echo '<input class="form-control" type="text" id="email"  value="'.$adminRecord['admin_email'].'" disabled>' ;
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
                              <input class="form-control" id="newpassword" type="password" minlength="8" maxlength="16" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" id="confirmpassword" type="password" minlength="8" maxlength="16" disabled></div>
															<input type="checkbox" onclick="newFunction()" id="showpassword" disabled> Show Password<br>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style="text-align:center;">
											<form action= "./action.php" method="POST">
                      <button class="btn" type="button" style="background-color:#ff7a7a; color: white; margin-right:25px;" onclick="updateFunction()">Update Profile</button>
                      <button class="btn" type="submit" style="background-color:#ff7a7a; color: white;">Save Changes</button>
											</form>
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
				document.getElementById('email').disabled = !document.getElementById('email').disabled;
				document.getElementById('newpassword').disabled = !document.getElementById('newpassword').disabled;
				document.getElementById('confirmpassword').disabled = !document.getElementById('confirmpassword').disabled;
				document.getElementById('showpassword').disabled = !document.getElementById('showpassword').disabled;
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
