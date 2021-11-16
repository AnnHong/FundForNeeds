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

app.component('signup-form',{
  template:
  `<form action="processUser.php" method="POST" style="margin:25px 500px 100px 500px;">
    <div class="container">
      <br><br>
      <label for="fullname"><b>{{fname}}</b></label>
      <input type="text" placeholder="Enter Full Name" name="fullname" required>

      <label for="username"><b>{{uname}}</b></label>
      <input type="text" placeholder="Enter Username" name="usernames" required>

      <label for="email"><b>{{email}}</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="password"><b>{{pass}}</b></label>
      <input id="pass" type="password" placeholder="Enter Password" name="password" minlength="8" maxlength="16" required>
      <label for="password-repeat"><b>{{rpass}}</b></label>
      <input id="rpass" type="password" placeholder="Repeat Password" name="password_repeat" minlength="8" maxlength="16" required>
      <input id="spass" type="checkbox" v-on:click="showpass()" style="margin-bottom:10px;"><label id="spass" for="spass">{{spass}}</label>
      <br>
      <input type="checkbox" id="check" required>
      <label id="check" for="check">  By creating an account you agree to our <a v-bind:href="tnc_page">Terms & Conditions</a>.</label>
      <br>
      <div class="clearfix" style="margin: 8px 0; width:100%;">
        <button type="submit" class="signupbtn" name = "signupbtn">Sign Up</button>
        <button type="button" class="cancelbtn" v-on:click="signin_page">Cancel</button>
      </div>
    </div>

    <div class="container signin" style="border-radius:15px 15px;">
      <p>Already have an account? <a v-bind:href="signin_page">Sign in</a>.</p>
    </div>
  </form>`,

  data: function(){
    return{
      fname: 'Full Name',
      uname: 'Username',
      email: 'Email',
      pass: 'Password',
      rpass: 'Repeat Password',
      spass: ' Show Password',
      signin_page: './user_signin.php',
      tnc_page: './tnc.html',
    }
  },

  methods: {
    showpass() {
      var x = document.getElementById("pass");
      var y=document.getElementById("rpass");
      if (x.type === "password") {
        x.type = "text";
        y.type = "text";
      } else {
        x.type = "password";
        y.type = "password";
        }
      },

      signin_page(){
        location.href = 'user_signin.php';
      }
  }
})

app.component('payment-succeed',{
  template:
  `
  <div>
  <h1 class="title is-1"><span class="mdi mdi-check-circle has-text-success"></span>Payment Succeed</h1>
  <button class="button is-primary is-rounded" v-on:click="user_hpage">Back to Home</button>
  </div>`,

  methods:{
    user_hpage(){
      location.href = 'user_index.php';
    },
  }
})

app.component('payment-failed',{
  template:
  `<div>
  <h1 class="title is-1"><span class="mdi mdi-close-octagon has-text-danger"></span>Payment Failed</h1>
  <button class="button is-primary is-rounded" v-on:click="user_hpage">Back to Home</button>
  </div>`,

  methods:{
    user_hpage(){
      location.href = 'user_index.php';
    },
  }
})
