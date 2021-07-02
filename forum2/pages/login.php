<?php 

    session_start();
    
    include '../functions/db.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($password == 'admin')
    {
        echo '<script language="javascript">';
        echo 'alert("Redirecting to Administrator, please re-login there.")';
        echo '</script>';
        echo "<script> location.href='../admin/index.php'; </script>";
        exit;
    }
    $pwd = md5($password);

    $query=$con->prepare("SELECT * FROM tblaccount WHERE username = :username AND password = :password");
	$query->bindParam(":username", $username);
	$query->bindParam(":password", $pwd);
	$query->execute();
	$query->setFetchMode(PDO::FETCH_ASSOC);
	$array=$query->fetch();

    if ($array['username'] == $username){
        $_SESSION['username'] = $username;
        $_SESSION['fname'] = $array['fname'];
        $_SESSION['lname'] = $array['lname'];
        $_SESSION['user_Id'] = $array['user_Id'];
        $_SESSION['pchatstate']=0;
        header("Location: home.php");
    }
    
    else{
        echo '<script language="javascript">';
        echo 'alert("Incorrect username or password")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
    }
   
?>