<?php
include "../functions/db.php";
date_default_timezone_set("Asia/Kolkata");
$datetime=date("Y-m-d h:i:sa");
extract($_POST);
$user_Id = 9;
$sql = $con->prepare("INSERT INTO tblpost(title, content, cat_id, datetime , user_Id) VALUES (:title,:content,:category,:datetime,:user_Id)");
$sql->bindParam(":title", $title);
$sql->bindParam(":content", $content);
$sql->bindParam(":category", $category);
$sql->bindParam(":datetime", $datetime);
$sql->bindParam(":user_Id", $user_Id);
$res = $sql->execute();

header("Location:post.php");


?> 