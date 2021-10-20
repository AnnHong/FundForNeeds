<?php
include 'user_list_function.php';
include 'processAdmin.php';
if(isset($_POST['EditUserButton'])){

  $msg=editUser();

}

function editUser()
{
  $con=mysqli_connect("localhost","fundforneeds","fundforneeds","fundforneeds");
  //2. check connection if ok
  if(!$con)
  	{
  	echo mysqli_error();
  	}
  else
  	{
      $UserQry = getUserInformation($_POST['EditUser']);

      $userRecord = mysqli_fetch_assoc($UserQry);

      echo '<body style="text-align:center;"><form action="user_list_function.php" method="POST">
      <div class="container">
        <center><h1>Update Customer Information</h1></center>
        <hr>
        <input type="text"  name="fullname"  placeholder="Full Name" value="'.$_POST['EditUser'].'" required>
        <input type="text"  name="usernames"  placeholder="Username" value="'.$userRecord['usernames'].'"required>
        <input type="text"  name="email" placeholder="Email"value="'.$userRecord['email'].'" required>
        <input type="text"  name="Paypal" placeholder="Paypal" value="'.$userRecord['Paypal'].'" required>
        <input type="password" placeholder="Enter Password" name="password" id="myInput"  value="'.$userRecord['password'].'">
        <br>
        <hr>
        <button type="submit" class="Signupnowbtn" name="save">Save</button>
      </div>
      </form>
      </body>';
  	}

  }



?>
