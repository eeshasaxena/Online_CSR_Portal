<?php
    //include_once 'header.php';
?>

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- navigation section -->
    <div class="nav-bar">
        <a href="index.php">
            <img src="assets/images/logo.png" alt="Fund Raiser logo">
            <!-- <h1>CSR GATEWAY</h1> -->
        </a>
         
     
        <div class="nav-links">
            <a href="campaigns.php">PROJECTS</a>
            <a href="donors.php">DONORS</a>
        </div>

       <!-- <div class="btn-login-signup">
            <button type="submit" id="btn-login" onclick="window.location.href='#'">LOGIN</button>
            <button type="submit" id="btn-signup" onclick="window.location.href='#'">SIGN UP</button>
        </div> -->
    </div>

    <!-- body part -->
    
    <div class="banner">
        <img src="assets/images/banner.png" alt=""><br><br>
        <span id="banner-quote">
            "No one has ever become <br> poor by giving."
        </span>
    </div>

    <div class="get-started">
        <span id="create-campaign">
            DONATE TO THE ONGOING PROJECTS
        </span>

        <button type="submit" onclick="window.location.href='campaigns.php'">GET STARTED</button>
    </div>


<?php
   //include_once 'footer.php';
?>