<?php
include "user_list_function.php"; //call function

$userQry = getUserInformation($_POST['EditUser']); //get info from users database, ($_POST['EditUser'])->hidden name
//$_POST['EditUser'] must declare because we selected the email like primary 

$userRecord  =mysqli_fetch_assoc($userQry);

      echo '<body style="text-align:center;"><form action="processAdmin.php" method="POST">
      <div class="container">
        <center><h1>Update User Information</h1></center>
        <hr>
        Full Name : <br>
        <input type="text"  name="fullname"  placeholder="Full Name" value="'.$userRecord['fullname'].'" required><br>
        Username :<br>
        <input type="text"  name="usernames"  placeholder="Username" value="'.$userRecord['usernames'].'"required><br>
        Email :<br>

        <input type="text"  name="email" placeholder="Email"value="'.$_POST['EditUser'].'" required><br>
        Paypal Account :<br>
        <input type="text"  name="Paypal" placeholder="Paypal" value="'.$userRecord['Paypal'].'" required><br>
        Passowrd :<br>
        <input type="password" placeholder="Enter Password" name="password" id="myInput"  value="'.$userRecord['password'].'"><br>
        <br>
        <hr>
        <button type="submit" class="Signupnowbtn" name="updateUser">Update Info</button>
      </div>
      </form>
      </body>';






?>
