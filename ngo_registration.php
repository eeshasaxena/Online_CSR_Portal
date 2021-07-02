
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
      height:60%;
      width:70%;
      background-color: white;
      margin-left:12%;
      text-align:center;
      border-radius:20px;

  }
  #heading{
      padding:20px;
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
      <li><a href="select.html">NGO Registration</a></li>
    </ul>
  <form method="post" action="">
    <div id="container">
      <center><h1>NGO Registration Form</h1></center>
      <div id="details">
        <div id="company_details">
          <h1 id="regsitration">NGO Details</h1>
          <div id="data">
            
            <label> Name </label>         
            <input type="text" placeholder="Name" name="name" required/>   
            <label>Registration Date</label>
            <input type="date" name="registration_date" required />
            <br />
            <label>Contact Number</label>
            <input type="text" placeholder="Contact Number" name="contact_number" required />

            <label>Email</label>
            <input type="text" placeholder="abc@email.com" name="email" required/><br />
            <label>NGO's Website URL</label>
            <input type="text" placeholder="http://www.xyz.com" name="website_url" required/>
          </div>
        </div>
        

        <div id="registered_address">
          <h1>Address Details</h1>
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
          <h1>Set Credentails</h1>
          <div id="data">
            <label>Username</label>
            <input type="text" placeholder="Username" name="username" required />
            <label>Password</label>
            <input type="password" placeholder="Password" name="password" required />
          </div>
        </div>
      </div>
      <div id="terms">
          <p id="terms&conditions">
            <input type="checkbox" id="t&c" name="t&c" value="t&c" />
            <label for="t&c"
              >I accept the<a href="terms-conditions.html">Terms and Conditions</a></label
            ><br />
          </p>
        </div>
      <center>
        <button class="bubbly-button" name="submit">Submit</button>
      </center><br />
      <div>
	  
      <label id="signin">Already a user?</label><br />
      <a href="ngo_login.php">Sign In</a>
      </div>
    </div>
	


  </body>
</html>
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
$registration_date=$_POST['registration_date'];
$contact_number=$_POST['contact_number'];
$email=$_POST['email'];
$website_url=$_POST['website_url'];
$state=$_POST['state']; 
$area=$_POST['area']; 
$city=$_POST['city']; 
$address=$_POST['address']; 
$pincode=$_POST['pincode']; 
$username=$_POST['username'];
$password = $_POST['password']; 

if(!preg_match("/^([a-zA-Z' ]+)$/",$name))
{
    echo '<script type="text/javascript">
          window.onload = function () { alert("Name should only contain characters and whitespaces"); }
</script>';
}
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) )
{  
    $ErrMsg = "Email is not valid.";  
    echo '<script type="text/javascript">
    window.onload = function () {"$ErrMsg"); }
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

$sql="insert into NGO(name,registration_date,contact_number,email,website_url,state,area,city,address,pincode,username,password) values('$name','$registration_date','$contact_number','$email','$website_url','$state','$area',
'$city','$address','$pincode','$username','$password')";
if(mysqli_query($conn, $sql)){
    echo "Your details are recorded";
    } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn); }
    }
?>