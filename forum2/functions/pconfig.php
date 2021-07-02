<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db = "dbforum";

try {
    date_default_timezone_set("Asia/Kolkata");
    $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    die("Connection failed: " . $e->getMessage());
}
?>