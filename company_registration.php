<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "csr";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); }
if(isset($_POST['submit'])){
$company_type=$_POST['company_type']; 
$company_name=$_POST['company_name']; 
$registration_date=$_POST['registration_date']; 
$pan_number=$_POST['pan_number']; 
$gstin_number=$_POST['gstin_number']; 
$cin_number=$_POST['cin_number']; 
$website_url=$_POST['website_url']; 
$net_worth=$_POST['net_worth']; 
$turn_over=$_POST['turn_over']; 
$profit=$_POST['profit']; 
$csr_amount=$_POST['csr_amount']; 
$state=$_POST['state']; 
$area=$_POST['area']; 
$city=$_POST['city']; 
$address=$_POST['address']; 
$pincode=$_POST['pincode']; 
$user=$_POST['username'];
$pass = $_POST['password']; 
if(!preg_match("/^([a-zA-Z' ]+)$/",$company_name))
{
    echo '<script type="text/javascript">
          window.onload = function () { alert("Name should only contain characters and whitespaces"); }
</script>';
}
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website_url)) {  
    $ErrMsg = "URL is not valid";  
      echo '<script type="text/javascript">
    window.onload = function () {"$ErrMsg"); }
</script>';  
  }
  if(!preg_match("/^([a-zA-Z' ]+)$/",$city))
  {
      echo '<script type="text/javascript">
            window.onload = function () { alert("City should only contain characters and whitespaces"); }
  </script>';
  }

$sql="insert into COMPANY(company_type,company_name,registration_date,pan_number,gstin_number,cin_number,website_url,net_worth,turn_over,profit,
csr_amount,state,area,city,address,pincode,username,password) values('$company_type','$company_name','$registration_date','$pan_number'
,'$gstin_number','$cin_number','$website_url','$net_worth','$turn_over','$profit','$csr_amount','$state','$area',
'$city','$address','$pincode','$user','$pass')";
if(mysqli_query($conn, $sql)){
    echo '<script type="text/javascript">
          window.onload = function () { alert("Registered Successfully."); }
</script>';
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); }
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>CSR Portal</title>
  </head>
  <style>
    body{
      background: -webkit-linear-gradient(
        45deg,
        rgb(41, 171, 135),
        rgb(119, 221, 119)
      );
    }
  #container{
      height:90%;
      width:70%;
      background-color: white;
      margin-left:12%;
      text-align:center;
      border-radius:20px;

  }
  h1{
      margin:20px;
  }
  input[type="text"],input[type="password"],input[type="date"],input[type="select"]{
      margin:15px;
      font-weight:700;
      width:150px;
      text-decoration:none;
      padding:15px;
      text-align:center;
      height:10px;
      border-radius:10px;
     }
     label{
         margin:20px;
         color:rgb(119, 221, 119);
         font-weight:1700;
         font-size:20px;

     }
     h2{
         margin:20px;
         padding:20px;
     }
     button {
        border-radius: 20px;
        border: 1px solid  rgb(41, 171, 135);
        background-color: pink;
        color: rgb(80, 200, 120);
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition-duration: 0.4s;
        text-decoration: none;
        overflow: hidden;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        margin:20px;
      }
      
      button:active {
        transform: scale(0.95);
      }
      
      button:focus {
        outline: none;
      }
      
      button.ghost {
        background-color: transparent;
        border-color:  rgb(41, 171, 135),;
      }
      a{
          font-size:20px;
          text-decoration:none;
          color:blue;

      }
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
      <li><a href="select.html">Company Registration</a></li>
    </ul>
  <form method="post" action="">
    <div id="container">
      <div id="details">
        <div id="company_details">
          <h1 id="regsitration">Company Registration Form</h1>
          <div id="data">
            <h2>Company Details</h2>
            <label>Company Type</label>
            <select id="type" name="company_type" required>
              <option value="corporate" selected>Corporate</option>
              <option value="partnership">Partnership</option>
              <option value="governmentcompany">Government Company</option>
              <option value="proprietorship">Proprietorship</option>
            </select>
            <label>Company Name</label>
            <input type="text" placeholder="Enter company name" name="company_name"required />
            <br />
            <label>Company Registration/Incorporation date</label>
            <input type="date" name="registration_date" required />
            <br />
            <label>PAN Number</label>
            <input type="text" placeholder="PAN Number" name="pan_number" required />
            <label>GSTIN Number</label>
            <input type="text" placeholder="GST Number" name= "gstin_number"required />
            <br />
            <label>CIN Number</label>
            <input type="text" placeholder="CIN Number" name="cin_number" />
            <label>Website URL</label>
            <input type="text" placeholder="http://www.xyz.com" name="website_url"/>
          </div>
        </div>
        <div id="financial_details">
          <h2>Company Financial Details</h2>
          <div id="data">
            <label>Net Worth</label>
            <input type="text" placeholder="Net worth" name="net_worth" required />
            <label>TurnOver</label>
            <input type="text" placeholder="Turn over" name="turn_over" required />
            <br />
            <label>Profit For Calculation of CSR</label>
            <input type="text" placeholder="Profit of CSR" name="profit" required />
            <br />
            <label>Prescribed CSR Amount</label>
            <input type="text" placeholder="CSR amount" name="csr_amount" required />
          </div>
        </div>

        <div id="registered_address">
          <h2>Company Registered Address</h2>
          <div id="data">
            <label>State</label>
            <select id="state" name="state" required>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Andaman and Nicobar Islands">
                Andaman and Nicobar Islands
              </option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh</option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadar and Nagar Haveli">
                Dadar and Nagar Haveli
              </option>
              <option value="Daman and Diu">Daman and Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Puducherry">Puducherry</option>
              <option value="Goa">Goa</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram</option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Telangana">Telangana</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="West Bengal">West Bengal</option>
            </select>
            <label>Choose Area</label>
            <select id="area" name="area" required>
              <option value="rural">Rural</option>
              <option value="urban">Urban</option>
            </select>

            <br />

            <label>City</label>
            <input type="text" placeholder="City name" name="city" />

            <br />

            <label>Address</label>
            <input type="text" placeholder="Registered address" name="address" required />
            <label>PinCode</label>
            <input type="text" placeholder="Pincode" name="pincode" required />
          </div>
        </div>

        <div id="registration_details">
          <h2>Company Registration Details</h2>
          <div id="data">
            <label>Username</label>
            <input type="text" placeholder="Username" name="username" required />
            <label>Password</label>
            <input type="password" placeholder="Password" name="password" required />
          </div>
        </div>
        <div id="terms">
          <p id="terms&conditions">
            <input type="checkbox" id="t&c" name="t&c" value="t&c" />
            <label for="t&c">I accept the <a href="terms-conditions.html">Terms and Conditions</a></label>
          </p>
        </div>
      </div>
  
      <a href="login.html"><button name="submit">Submit</button></a>
      <br><br><br>
      <div class="login">
      <h4>Already a user? <a href="company_login.php" style="color: rgb(80, 200, 120);text-decoration: none;">Login</a></h4>
      
      </div>
    </div>
  </body>
</html>
