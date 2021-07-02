<!DOCTYPE html>
<html>
  <head>
    <title>LOGIN</title>
  </head>
  <link href="login.css" rel="stylesheet" />
    
  <style>
   ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  text-align: right;
  /* background-color: #eee; */
  margin-top: 10px;
}
ul.breadcrumb li {
  display: inline;
  font-size: 14px;
  color: #fff;
  
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: #fff;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #fff;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #113448;
  text-decoration: none;
}

.login{
  padding-bottom: 100px;
}

  </style>
  <body>
    
    <ul class="breadcrumb">
      <li><a href="home.html">Home</a></li>
      <li><a href="select.html">User Login</a></li>
      <li id="l">User Login</li>
    </ul>
    <div class="container" id="container">
      <div class="form-container sign-in-container">
        <form  method="post" action="login.php">
          <h1>Sign In</h1>
          <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <input type="uname" placeholder="Username" name="username" />
          <input type="password" placeholder="Password" name="password" />
          <button>Login</button>
          <h4>NEW USER ? <a href="user_registration.php"style="color:blue;">Register</a></h4>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-right">
            <img src="https://codifiedyouth.com/wp-content/uploads/2021/02/loginbg.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
