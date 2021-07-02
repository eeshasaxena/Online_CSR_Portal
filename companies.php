<html>

<head>

</head>

<style>
    body{
        background: -webkit-linear-gradient(
    45deg,
    rgb(41, 171, 135),
    rgb(119, 221, 119));
    }
   #search{
       margin-top:70px;
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
}
button {
  border-radius: 20px;
  border: 1px solid rgb(80, 200, 120);
  background-color: #e899dc;
background-image: linear-gradient(315deg, #e899dc 0%, #d387ab 74%);
  color: #ffffff;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition-duration: 0.4s;
  text-decoration: none;
  overflow: hidden;
  cursor: pointer;
  margin: 50px;
  -webkit-transition-duration: 0.4s;
}

button:active {
  transform: scale(0.95);
}

button:focus {
  outline: none;
}

button.ghost {
  background-color: transparent;
  border-color: #ffffff;
}
    input[type="text"]
 {
  height: 30px;
  width: 165px;
  padding: 15px;
  text-align: center;
  border-radius: 10px;
  margin: 20px;
  font-size: 20px;
  font-weight: 700;
  text-decoration: none;
  border-color: rgb(119, 221, 119);
    color:#861657;
    color:linear-gradient(326deg, #861657 0%, #ffa69e 74%);
}
    #container{
        margin: 30px;
    }
</style>


<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
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
<div class="container">
	<div class="displaydetails">
	<center><form method="POST" action="RetrieveandDisplay.php">
       <div id="container">
			<label id="search">Enter the company type to search company</label><br/>
		</div>
		<input type="text" name="FetchDetails">
		<button name="Find">Search</button>
	</form>
       </center>
	</div>
</div>
<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "csr";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
$sql="SELECT company_type,company_name,registration_date,website_url FROM COMPANY";
$result=mysqli_query($conn,$sql);
echo " <center><table border='1'>

<tr>

<th>Company Type</th>

<th>Company Name</th>

<th>Registration Date</th>

<th>Website Link</th>

</tr> </center>";
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))

  {   echo "<tr>";

  echo "<td>" . $row['company_type'] . "</td>";

  echo "<td>" . $row['company_name'] . "</td>";

  echo "<td>" . $row['registration_date'] . "</td>";

  echo "<td>" . $row['website_url'] . "</td>";

  echo "</tr>";

  echo "<br />";

  }

    

 

?>
    </body>

</html>