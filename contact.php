<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "csr";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
if(isset($_POST['submit'])){
$name=$_POST['name']; 
$email=$_POST['email']; 
$service=$_POST['service'];
$message=$_POST['message']; 
if(!preg_match("/^([a-zA-Z' ]+)$/",$name)){
    echo '<script type="text/javascript">
          window.onload = function () { alert("Name should only contain characters and whitespaces"); }
</script>';
}
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
    echo '<script type="text/javascript">
    window.onload = function () {"$ErrMsg"); }
</script>'; 
}  


$sql="insert into contact(name,email,service,message) values('$name','$email','$service','$message')";
if(mysqli_query($conn, $sql)){
    echo '<script type="text/javascript">
          window.onload = function () { alert("Your query is recorded"); }
</script>';
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contact Us</title></head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/bootstrap/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />

    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/css-hamburgers/hamburgers.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/animsition/css/animsition.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/select2/select2.min.css"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="vendor/daterangepicker/daterangepicker.css"
    />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
  <link href="contact.css" rel="stylesheet">
<style>

</style>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
       
  <!--<a class="navbar-brand logo-image"><img src="images/logo.png"></a>-->
   <a class="navbar-brand logo-text page-scroll" href="index.html" style="color:white;">   CSR GATEWAY</a>

   
   <!-- Mobile Menu Toggle Button -->
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-awesome fas fa-bars"></span>
       <span class="navbar-toggler-awesome fas fa-times"></span>
   </button>
   <!-- end of mobile menu toggle button -->

   <div class="collapse navbar-collapse" id="navbarsExampleDefault">
       <ul class="navbar-nav ml-auto">
           <li class="nav-item">
               <a class="nav-link page-scroll" href="home.html">HOME <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
               <a class="nav-link page-scroll" href="forum2/index.php">PUBLIC FORUM</a>
           </li>
           
          
           <li class="nav-item">
               <a class="nav-link page-scroll" href="#projects">PROJECTS</a>
           </li>
           
           <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">USERS</a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="corporates.php"><span class="item-text">CORPORATES</span></a>
               <div class="dropdown-items-divide-hr"></div>
               <a class="dropdown-item" href="govt.php"><span class="item-text">GOVERNMENT DEPARTMENT</span></a>
               <div class="dropdown-items-divide-hr"></div>
               <a class="dropdown-item" href="ngo.php"><span class="item-text">NON GOVERNMENT ORGANISATION</span></a>
           </div>
       </li>
           <li class="nav-item">
           <a class="nav-link page-scroll" href="companies.php" >COMPANIES</a>
          </li>
          <li class="nav-item">
                <a class="nav-link page-scroll" href="news.html" >NEWS AND EVENTS</a>
            </li>
          <li class="nav-item">
               <a class="nav-link page-scroll" href="select.html">LOG IN</a>
           </li>
           
                  
           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">OTHERS</a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS & CONDITIONS</span></a>
                   <div class="dropdown-items-divide-hr"></div>
                   <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                   <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="feedback.php"><span class="item-text">FEEDBACK</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="about.html"><span class="item-text">ABOUT US</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="contact.html"><span class="item-text">CONTACT US</span></a>
               </div>
           </li>
           

           
       </ul>
       <span class="nav-item social-icons">
           <span class="fa-stack">
               <a href="#your-link">
                   <span class="hexagon"></span>
                   <i class="fab fa-facebook-f fa-stack-1x"></i>
               </a>
           </span>
           <span class="fa-stack">
               <a href="#your-link">
                   <span class="hexagon"></span>
                   <i class="fab fa-twitter fa-stack-1x"></i>
               </a>
           </span>
       </span>
   </div>
</nav> 
    <div class="container-contact100">
      <div class="wrap-contact100">
        <form class="contact100-form validate-form" name="contactForm" method="post" action="" >
          <span class="contact100-form-title"> Contact Us </span>

          <div
            class="wrap-input100 validate-input"
            data-validate="Name is required"
          >
            <span class="label-input100">Name:</span>
            <input
              class="input100"
              type="text"
              name="name"
              placeholder="Enter your name"
              required
            />
            <span class="focus-input100"></span>
          </div>

          <div
            class="wrap-input100 validate-input"
            data-validate="Valid email is required: ex@abc.xyz"
          >
            <span class="label-input100">Email</span>
            <input
              class="input100"
              type="text"
              name="email"
              placeholder="Enter your email addess"
              required
            />
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 input100-select">
            <span class="label-input100">Needed Services</span>
            <div>
              <select class="selection-2" name="service" required>
                <option>HealthCare</option>
                <option>Social Welfare</option>
                <option>Environmental benifits</option>
                <option>Education</option>
              </select>
            </div>
            <span class="focus-input100"></span>
          </div>

          <div
            class="wrap-input100 validate-input"
            data-validate="Message is required"
          >
            <span class="label-input100">Message</span>
            <textarea
              class="input100"
              name="message"
              placeholder="Your message here..."
              required
            ></textarea>
            <span class="focus-input100"></span>
          </div>

          <div class="container-contact100-form-btn">
            <div class="wrap-contact100-form-btn">
              <div class="contact100-form-bgbtn"></div>
              <button class="contact100-form-btn" name="submit">
                <span>
                  Submit
                  <i
                    class="fa fa-long-arrow-right m-l-7"
                    aria-hidden="true"
                  ></i>
                </span>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div id="dropDownSelect1"></div>
    
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
      $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $("#dropDownSelect1"),
      });
    </script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-23581568-13");
    </script>
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About us</h4>
                        <p class="white">Corporate Social Responsibility or CSR has suddenly come in the limelight after the Section 135 of Companies Act, 2013 made it mandatory for every company meeting one or all three criteria to spend at least two percent of the average net profits of the company made during the three immediately preceding financial years on CSR activities.</p>
                    </div> 
                </div> 
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="feedback.php">Feedback</a>
                            </li>
                            <li>
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> 
                </div> 
                
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="https://www.csr.gov.in">CSR.com</a>
                            </li>
                            <li>
                                <a class="white" href="home.html">CSR-Gateway.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">CSR-Gateway.gov</a>
                            </li>
                        </ul>
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
    


    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 <a href="https://inovatik.com">CSR Gateway</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
  </body>
</html>
