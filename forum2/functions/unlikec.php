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
$postid = $_GET['val1'];
$commentid = $_GET['val2'];

$stmt = $con->prepare("DELETE FROM `tbllikecomment` where user_Id=:userid and post_Id=:postid and comment_Id=:commentid");
$stmt->bindParam(":userid", $userid);
$stmt->bindParam(":postid", $postid);
$stmt->bindParam(":commentid", $commentid);
$res = $stmt->execute();

if ($res==true)
{
    $query2 = $con->prepare("SELECT count(user_Id) as `total_likes` from tbllikecomment where post_Id=:post_Id and comment_Id=:comment_Id");
    $query2->bindParam("post_Id", $postid);
    $query2->bindParam(":comment_Id", $commentid);
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