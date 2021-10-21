<?php
include "user_list_function.php"; //call function

$userQry = getUserInformation($_POST['EditUser']); //get info from users database, ($_POST['EditUser'])->hidden name
//$_POST['EditUser'] must declare because we selected the email like primary

$userRecord  =mysqli_fetch_assoc($userQry);

      echo
      '<html>
      <head>
      <title>User Info Modification</title>
      <link rel="stylesheet" href="index.css">
      <link rel="stylesheet" href="index_theme.css">
      <link rel="stylesheet" href="index_font.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
        body{font-family:arial;background-color:#ff7a7a;}
        form{background-color:white;margin-top:23px;border-radius:15px 15px;padding: 75px 0 75px 0;width:40%;margin-left:30%;box-shadow:0 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.1)}
        button{cursor:pointer;color:white;border:none;padding:15px;width:35%;border-radius:75px 25px;margin-top:15px;font-size:17px;margin-left:25px;}
        .updatebtn{background-color:rgb(68, 159, 235);margin-left:13%;}
        .cancelbtn{background-color:#ff0028;}
        input{padding:11px;width:60%;border-radius:50px 50px;border:1px solid darkgrey;margin-left:20%;font-size:15px;}
        label{margin-left:20%;font-size:17px;}
        .animate-bottom {
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
        </style>
      </head>
      <body class="animate-bottom">
      
      <form action="processAdmin.php" method="POST">
      <div>

        <label>Full Name :</label><br>
        <input type="text"  name="fullname"  placeholder="Full Name" value="'.$userRecord['fullname'].'" required><br><br>
        <label>Username :</label><br>
        <input type="text"  name="usernames"  placeholder="Username" value="'.$userRecord['usernames'].'"required><br><br>
        <label>Email :</label><br>
        <input type="text"  name="email" placeholder="Email"value="'.$_POST['EditUser'].'" required><br><br>
        <label>Paypal Account :</label><br>
        <input type="text"  name="Paypal" placeholder="Paypal" value="'.$userRecord['Paypal'].'" required><br><br>
        <label>Password :</label><br>
        <input type="password" placeholder="Enter Password" name="password" id="myInput"  value="'.$userRecord['password'].'"><br>
        <input type="checkbox" onclick="newFunction()" id="showpassword">Show Password<br>
        <br>
        <button type="submit" class="updatebtn" name="updateUser">Update</button>
        <button type="button" class="cancelbtn" onclick="goBack()">Cancel</button>
      </div>
      </form>
      <script>
      function newFunction() {
        var x = document.getElementById("myInput");


        if (x.type === "password") {
          x.type = "text";


        } else {
          x.type = "password";

        }
      }
        function goBack() {
          window.history.back();
        }
      </script>
      </body>
      </html>';






?>
