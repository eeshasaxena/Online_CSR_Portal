<html>
<head>
<title>GOVERNMENT DEPARTMENT</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    <style>
    #container{
    height:80%;
    width: 80%;
    background: -webkit-linear-gradient(
        45deg,
        rgb(41, 171, 135),
        rgb(119, 221, 119)
      );
      margin:10%;

}
table

{
border-style:solid;
border-width:2px;
border-color:pink;
width: 60%;
font-weight: 600;
text-align: center;
}
td{
    color: white;
}</style>
<body>
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
       
       <!--<a class="navbar-brand logo-image"><img src="images/logo.png"></a>-->
        <a class="navbar-brand logo-text page-scroll" href="index.html" style="color:rgb(80,200,120)">   CSR GATEWAY</a>
    
        
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
				<a class="nav-link page-scroll" href="companies.php">COMPANIES</a>
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
                        <a class="dropdown-item" href="feedback.php"><span class="item-text">FEEDBACK</span></a>
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
    <div id="container">
    <div id="corporates">
    <?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $dbname = "csr";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }
    $myquery="SELECT company_type,company_name,website_url FROM COMPANY WHERE company_type='Partnership' OR company_type='Proprietorship' OR company_type='Corporate' ";
    echo "<center><table border='1' >

<tr>

<th>Company Type</th>

<th>Company Name</th>

<th>Website Link</th>

</tr></center>";
$fetched=mysqli_query($conn,$myquery);
	while($row=mysqli_fetch_array($fetched,MYSQLI_ASSOC))
	{  
		 echo "<tr>";

  echo "<td>" . $row['company_type'] . "</td>";

  echo "<td>" . $row['company_name'] . "</td>";

  echo "<td>" . $row['website_url'] . "</td>";

  echo "</tr>";

  

  echo "<br />";
	}


    ?>
    </div>
    </div>








   
</body>
</html>