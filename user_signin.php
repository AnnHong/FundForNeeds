<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="index_theme.css">
<link rel='stylesheet' href='index_font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="user_signin.css">
<script src="https://unpkg.com/vue@next"></script>
<title>Sign In</title>
<style>
button{
  border-radius: 75px 25px;
}

input{
  border-radius: 50px 50px;
}

#showpass{
  cursor: pointer;
}

/* Add animation to "page content" */
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

.size_image{
  width:150px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 100px 100px;
  box-shadow: 8px 4px 10px 0 rgba(0,0,0,0.2),0 4px 20px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body class="animate-bottom" id="app">
  <div class="w3-top">
   <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
    <a v-bind:href="index_page" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white" style="border-radius: 15px 15px;"><i class="fa fa-home w3-margin-right"></i> <b>{{brand}}</b> </a>
    <a v-bind:href="login_page" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="Sign In" style="background-color: #04AA6D; color: white;border-radius: 25px 25px;">{{login}}</a>
   </div>
  </div>

<login-form></login-form>

<div style="position:absolute; width:100%; bottom: -90px;">
  <footer class="w3-container w3-theme-d2 w3-padding-16">
  <div style="text-align:center;">
    <a v-bind:href="tnc_page" style="color:white;text-shadow: 2px 2px 20px #000000;">{{tnc}}</a>&emsp;
    <a v-bind:href="contact_page" style="color:white;text-shadow: 2px 2px 20px #000000;">{{contact}}</a>&emsp;
    <a v-bind:href="about_page" style="color:white;text-shadow: 2px 2px 20px #000000;">{{about}}</a>&emsp;
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
<script src="./main.js" charset="utf-8"></script>
<script src="./components.js" charset="utf-8"></script>
<script type="text/javascript">
  const mountedApp = app.mount('#app')
</script>
</body>
</html>
