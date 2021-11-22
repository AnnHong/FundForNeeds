<?php
$email = $_GET['email']; //GET parameter from ?

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
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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

		img{
		   pointer-events: none;
		}
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
    .close,.cancel {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    color: red;
    }

    .close:hover, .close:focus,.cancel:hover, .cancel:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
    }

    body{
        margin-top:25px;
    }

		button[name=back]{
			background-color: #04AA6D;
			color: white;
			border-radius:75px 25px;
			border:0px;
			cursor:pointer;
			padding:10px 35px 10px 35px;
			margin: 45px 0 0 628px;
		}
    </style>
    <script>
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
									<?php
									$email =$_GET['email'];
    							$con = mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
    							$q = mysqli_query($con,'SELECT * FROM users WHERE  email ="'.$email.'" ');
    							while($row=mysqli_fetch_assoc($q)){
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
                    $qryUserData = getUserInformation($_GET['email']);
                    $userRecord = mysqli_fetch_assoc($qryUserData);
                        echo '<h4 class="pt-sm-2 pb-1 mb-0 text-nowrap">' .$userRecord['fullname']. '</h4>' ;
                        echo '<p class="mb-0">@'.$userRecord['usernames']. '</p>';
                        ?>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Profile Information</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <!-- <form class="form" action="update_function.php" method="POST"> -->
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
																echo '<input class="form-control" type="text" style="border-radius:25px 25px;" id="paypal" name ="phoneNumber" value="'.$userRecord['phoneNumber'].'" disabled>';
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
                  <!-- </form> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
			<button type="submit"  name="back" onclick="goBack()">Back to Previous Page</button>
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
        if (input.value != document.getElementById('newpassword').value) {
            input.setCustomValidity('Password Must be Matching.');
        }
    }

		function goBack() {
      window.history.back();
    }
			</script>

<div style="position:absolute;width:100%;margin-top:58px;">
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
