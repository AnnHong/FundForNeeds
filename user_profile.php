
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
    /* The Modal (background) */
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

    body{
        margin-top:25px;
    }
    </style>
</head>
<body>
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
        <a href="user_profile.php" class="w3-bar-item w3-button" style="border-radius:25px 25px;text-align:center;">My Profile</a>
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
                  <div class="mx-auto" style="width: 140px;">
                    <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                      <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                    </div>
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <?php
                    include 'Admin/user_list_function.php';
                    $qryUserList = getListOfUser();
                      while($row = mysqli_fetch_assoc($qryUserList)){
                        echo '<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">' .$row['fullname']. '</h4>' ;
                        echo '<p class="mb-0">'.$row['usernames']. '</p>';
                      }
                        ?>

                    <div class="mt-2">
                      <button class="btn" type="submit" style="background-color:#80daeb; color: white;">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button>
                    </div>

                    <div class="mt-2">

                      <div>
                        <!-- Trigger/Open The Modal -->
                        <button id="myBtn" class="btn" style="background-color:#80daeb; color: white;">Verify</button>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                          <!-- Modal content -->
                          <div class="modal-content" style=" text-align:right !important;">
                            <span class="close">&times;</span>
                            <input type="file" name="Upload IC" value="Upload your IC" id="upload" hidden>
                            <div style="display:inline-block;text-align:center;">
                              <form action="upload_img2.php" method="post" enctype="multipart/form-data">
                                <b><p>Please upload your IC to verify.</p></b>
                                <input type="file" id="myFile" name="file_name" style="margin:0 0 25px 80px;">
                                <input type="submit" name ="upload_button" class="btn">
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

                              $qryUserList = getListOfUser();
                                while($row = mysqli_fetch_assoc($qryUserList)){
                                  echo '<input class="form-control" type="text"   value="' .$row['fullname']. '" disabled>' ;

                                }
                                  ?>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <?php

                              $qryUserList = getListOfUser();
                                while($row = mysqli_fetch_assoc($qryUserList)){
                                  echo '<input class="form-control" type="text"   value="' .$row['usernames']. '" disabled>' ;

                                }
                                  ?>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <?php

                              $qryUserList = getListOfUser();
                                while($row = mysqli_fetch_assoc($qryUserList)){
                                  echo '<input class="form-control" type="password"   value="' .$row['password']. '" disabled>' ;

                                }
                                  ?>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <?php

                              $qryUserList = getListOfUser();
                                while($row = mysqli_fetch_assoc($qryUserList)){
                                  echo '<input class="form-control" type="text"   value="' .$row['email']. '" disabled>' ;

                                }
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
                              <input class="form-control" type="password" placeholder="••••••••••••" disabled>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Confirm <span class="d-none d-xl-inline">Password</span></label>
                              <input class="form-control" type="password" placeholder="••••••••••••" disabled></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div style="text-align:center;">
                      <button class="btn " type="submit" style="background-color:#80daeb; color: white; margin-right:25px;">Change Password</button>
                        <button class="btn " type="submit" style="background-color:#80daeb; color: white;">Update Profile</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
