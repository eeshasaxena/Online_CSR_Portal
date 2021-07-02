<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
 
    <title>CSR Gateway</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	

    <link rel="icon" href="images/favicon.png">

</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    
	
    

 
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
       
       <!--<a class="navbar-brand logo-image"><img src="images/logo.png"></a>-->
        <a class="navbar-brand logo-text page-scroll" href="index.html">   CSR GATEWAY</a>
    
        
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
                <!-- <li class="nav-item">
                    <a class="nav-link page-scroll" href="about.html">ABOUT US</a>
                </li> -->
                
               
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">PROJECTS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="corporates.php"><span class="item-text">Company wise</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="govt.php"><span class="item-text">State wise</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="govt.php"><span class="item-text">NGO wise</span></a>
                        
                        <!-- <div class="dropdown-items-divide-hr"></div> -->
                        <!-- <a class="dropdown-item" href="NGO.php"><span class="item-text">NON GOVERNMENT ORGANISATION</span></a> -->

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">USERS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="corporates.php"><span class="item-text">CORPORATES</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="govt.php"><span class="item-text">GOVERNMENT DEPARTMENT</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="NGO.php"><span class="item-text">NON GOVERNMENT ORGANISATION</span></a>

                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="companies.php" >COMPANIES</a>
                </li>
                 
                
                       
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll"  id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">OTHERS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="about.html"><span class="item-text">ABOUT US</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS & CONDITIONS</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="feedback.html"><span class="item-text">FEEDBACK</span></a>
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

    <!-- -------------------------END OF NAVBAR ------------------------------ -->


    <div id="intro" class="basic-1">
        <div class="container">
            <div class="page-head">
                <h1>Discussion Forum</h1>
            </div>
            <div class="row">
                <div class="column">
                    
                    <div class="text-container">
                    This is a forum for any sort of discussion on technical issues that commonly plague the world of
                     students, and a general front for miscellaneous technology talk. Post, comment, vote and have a
                      good time. Sign up on the right to begin!
                    </div>
                </div>

                <div class="column">
                    <form method="POST" class="form-signin" action="functions/register.php">
						<h3 class="text-center">Signup Here!</h3>
							<input type="text" name="fname"placeholder="First Name"class="form-control" required>
							<input type="text" name="lname"placeholder="Last Name"class="form-control" required>
							<select class="form-control" name="gender"required>
								<option>Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
                                <option value="Other">Other</option>
							</select>
							<input type="text" placeholder="Username" name="username"class="form-control" required>
							<input type="password" placeholder="Password" name="password" class="form-control" required>
							<input type="submit" value="Signup" class="btn btn-success" style="width:100%;">
					</form>

                    <div>
					<form class="navbar-form navbar-right" method="POST"role="search" action="pages/login.php">
					<div class="form-group">
					<input type="text" class="form-control" name="username"placeholder="Username">
					<input type="password" class="form-control" name="password"placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success">Login</button>
					</form>
				</div>

                </div>
        
    
      

                
            </div>
        </div>
    </div>

    



    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>Few Words About us</h4>
                        <p class="white">We're passionate about Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip e.</p>
                    </div> 
                </div> 
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Links</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li class="li">
                                <a class="white" href="#your-link">blah.com</a>
                            </li>
                            <li class="li">
                                <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            </li>
                            <li class="li">
                                <a class="white" href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div> 
                </div> 
                
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Partners</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li class="li">
                                <a class="white" href="#your-link">CSR.com</a>
                            </li>
                            <li class="li">
                                <a class="white" href="#your-link">CSR-Gateway.com</a>
                            </li>
                            <li class="li">
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