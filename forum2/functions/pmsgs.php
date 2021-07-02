<?php
include("pconfig.php");
$sql=$dbh->prepare("SELECT * FROM private where sender=:sender and recipient=:recipient");
$sql->bindParam(":sender", $_SESSION['username']);
$sql->bindParam(":recipient", $_SESSION['recipient']);
$sql->execute();
while($r=$sql->fetch()){
    echo "<div class='msg' title='{$r['posted']}'><span class='name'>{$r['sender']}</span> : <span class='msgc'>{$r['msg']}</span></div>";
}
if(!isset($_SESSION['username']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
    echo "<script>window.location.reload()</script>";
}
?>