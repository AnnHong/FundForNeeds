const app = Vue.createApp({
  data: function(){
    return{
      brand: 'Fund For Needs',
      login: 'Sign In',
      index_page: './index.php',
      login_page: './user_signin.php',
      tnc_page: 'tnc.html',
      contact_page: 'contact_us.html',
      about_page: 'about_us.html',
      tnc: 'Terms and Conditions',
      contact: 'Contact Us',
      about: 'About Us',
      admin_tnc: './admin_tnc.php',
      admin_about: './admin_aboutus.php',
      admin_login: './Admin_Login.php',
    }
  },
})
