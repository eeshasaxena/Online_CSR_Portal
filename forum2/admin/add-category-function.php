<?php
include "../functions/db.php";
 				
extract($_POST);
$sql = $con->prepare("INSERT INTO `category`(category) VALUES (:category)");
$sql->bindParam(":category", $category);
$res = $sql->execute();

header("Location:category.php");


?> 