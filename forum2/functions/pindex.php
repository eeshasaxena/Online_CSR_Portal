<?php
session_start();
include("pconfig.php");

if (isset($_POST['recipient'])) {
    echo "xxx";
    $recipient=$_POST['recipient'];
    $_SESSION['recipient']=$recipient;
}
if (isset($_GET['recipient'])) {
    $recipient=$_GET['recipient'];
    $_SESSION['recipient']=$recipient;
}
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="chat.js"></script>
    <link href="../css/chat.css" rel="stylesheet"/>
    <title>Private Chat</title>
</head>
<body>
<div id="content" style="margin-top:10px;height:100%;">
    <center><h1>Group Chat</h1></center>
    <div class="chat">
        <div class="users">
            <?php include("pusers.php");?>
        </div>
        <div class="chatbox">
            <?php
            if(isset($_SESSION['username'])){
                include("pchatbox.php");
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>