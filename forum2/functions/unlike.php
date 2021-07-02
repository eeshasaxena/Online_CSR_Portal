<?php
include 'db.php';
session_start();
if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
}
else
{
    header("Location:../index.php");
}
$userid = $_SESSION['user_Id'];
$postid = $_GET['val'];

$stmt = $con->prepare("DELETE FROM `tbllikepost` WHERE user_Id=:userid and post_Id=:postid");
$stmt->bindParam(":userid", $userid);
$stmt->bindParam(":postid", $postid);
$res = $stmt->execute();

if ($res==true)
{
    $query2 = $con->prepare("SELECT count(user_Id) as `total_likes` from tbllikepost where post_Id=:post_Id");
    $query2->bindParam("post_Id", $postid);
    $query2->execute();
    $qres2 = $query2->fetch();
    extract($qres2);
    echo "&nbsp&nbsp&nbsp&nbspLikes :&nbsp".$total_likes;
}
else
{
    echo '<script language="javascript">';
    echo 'alert("Could not like!")';
    echo '</script>';
    echo '<meta http-equiv="refresh" content="0;url=../pages/home.php" />';
}
?>