app.component('login-form',{
  template:
  `<form action="signin.php" method="post" style="margin:100px 500px 75px 500px;border-radius: 15px 15px;">

    <div class="container">
      <img class="size_image" v-bind:src="logo"><br>
      <label for="email"><b>{{email}}</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="password"><b>{{pass}}</b></label>
      <input id="pass" type="password" placeholder="Enter Password" name="password" required>
      <input id="showpass" type="checkbox" v-on:click="showpass" style="margin-bottom:10px;"><label id="showpass" for="showpass"> Show Password</label>

      <div class="clearfix">
        <button type="submit" class="signinbtn" name="signinbtn" style="margin-bottom:10px;">{{login}}</button>
        <button type="button" class="cancelbtn" v-on:click="home">{{cancel}}</button>
      </div>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <p>Don't have an account? <a v-bind:href="signup_page">{{signup}}</a> <span class="password">Forgot <a v-bind:href="resetpass_page">password?</a></span></p>
    </div>
  </form>`,

  data: function(){
    return{
      email: 'Email',
      pass: 'Password',
      login: 'Sign In',
      cancel: 'Cancel',
      signup: 'Sign Up Now',
      logo: './FundForNeedsV2.png',
      signup_page: './user_signup.php',
      resetpass_page: './user_reset_password.php',
    }
  },

  methods: {
    showpass() {
      var x = document.getElementById("pass");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
        }
      },

      home(){
        location.href = 'index.php';
      }
  }
})
