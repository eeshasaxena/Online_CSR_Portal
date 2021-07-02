<?php
include("db.php");
session_start();

if (isset($_SESSION['username'])) {
    $user=$_SESSION['username'];
}

if ($_SESSION['pchatstate']==0) {
    $_SESSION['pchatstate']=1;
    $sql = $con->prepare("SELECT username from tblaccount where username<>:username");
    $sql->bindParam(":username", $user);
    $res = $sql->execute();
    if ($res == true) {
        while ($row = $sql->fetch()) {
            extract ($row);
            echo "<li><a onclick=send_recipient(\"".strval($username)."\")>" . strval($username) . "</a></li>";
        }
    }
}
else
{
    header("Location : ../pages/profile.php");
}
?>
