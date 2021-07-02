<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "csr";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
if(isset($_POST['send'])){
$name=$_POST['name']; 
$email=$_POST['email']; 
$comment=$_POST['comment']; 
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


$sql="insert into feedback(name,email,comment) values('$name','$email','$comment')";
if(mysqli_query($conn, $sql)){
    echo '<script type="text/javascript">
          window.onload = function () { alert("Feedback recorded."); }
</script>';
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); }
}

?>
<html>
  <head>
    <title>FEEDBACK FORM</title>
  </head>
  <link rel="stylesheet" href="feedback.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <body>
  <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
       
  <!--<a class="navbar-brand logo-image"><img src="images/logo.png"></a>-->
   <a class="navbar-brand logo-text page-scroll" href="index.html" style="color:black;">   CSR GATEWAY</a>

   
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
               <a class="nav-link page-scroll" href="#">PUBLIC FORUM</a>
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
           
                  
           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">OTHERS</a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS & CONDITIONS</span></a>
                   <div class="dropdown-items-divide-hr"></div>
                   <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                   <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="feedback.html"><span class="item-text">FEEDBACK</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="about.html"><span class="item-text">ABOUT US</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="contact.php"><span class="item-text">CONTACT US</span></a>
               </div>
           </li>
           
           <li class="nav-item">
               <a class="nav-link page-scroll" href="select.html">LOG IN</a>
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
<form method="post" action="">
    <div class="container">
      <div class="inner">
        <div class="panel panel-left">
          <div class="panel-content">
            <div class="details"><img src="./csr.jpeg"  width="1500px" height="443px;"></div>
            <div class="image-background"></div>
          </div>
        </div>
        <div class="panel panel-right">
          <div class="panel-content">
            <div class="form">
              <h1>Leave a comment</h1>
              <div class="group">
                <input type="text" name="name" required />
                <span class="highlight"></span>
                <label>Your name</label>
              </div>
              <div class="group">
                <input type="text" name="email" required />
                <span class="highlight"></span>
                <label>Your email</label>
              </div>
              <div class="group">
                <input type="text" name="comment" required />
                <span class="highlight"></span>
                <label>Your comment</label>
              </div>
              <button name="send" class="send" style="background-color:white ;
              border: rgb(41, 171, 135) 2px solid;
              border-radius: 15px;
              color: rgb(41, 171, 135);
              font-size: 15px;
              text-decoration: none;
              padding: 10px;
              width: 30%;
              font-weight:1000;"




              >Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
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
                                <a class="white" href="feedback.html">Feedback</a>
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
                                <a class="white" href="#your-link">CSR.com</a>
                            </li>
                            <li>
                                <a class="white" href="#your-link">CSR-Gateway.com</a>
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
