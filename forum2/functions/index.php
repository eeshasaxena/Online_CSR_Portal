<?php
session_start();
include("config.php");
include("login.php");
?>
<!DOCTYPE html>
<html>
<head>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="chat.js"></script>
    <link href="../css/chat.css" rel="stylesheet"/>
    <title>Group Chat</title>
</head>
<body>
<div id="content" style="margin-top:10px;height:100%;">
    <center><h1>Group Chat</h1></center>
    <div class="chat">
        <div class="users">
            <?php include("users.php");?>
        </div>
        <div class="chatbox">
            <?php
            if(isset($_SESSION['username'])){
                include("chatbox.php");
            }else{
                $display_case=true;
                include("login.php");
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>