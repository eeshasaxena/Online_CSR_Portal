<?php
session_start();
include("config.php");
if(!isset($_SESSION['username']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
    echo "<script>window.location.reload()</script>";
}

if(isset($_SESSION['username']) && isset($_POST['msg'])){
    $msg=htmlspecialchars($_POST['msg']);
    if($msg!=""){
        $sql=$dbh->prepare("INSERT INTO messages (name,msg,posted) VALUES (?,?,NOW())");
        $sql->execute(array($_SESSION['username'],$msg));
        echo '<meta http-equiv="refresh" content="0;url=index.php" />';
    }
}
?>