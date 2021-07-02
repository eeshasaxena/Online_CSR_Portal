<?php
    session_start();
	
	include '../functions/db.php';

	$uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
	//$pwd = md5($password);

	$query = $con->prepare("SELECT * FROM tbladmin WHERE uname = :uname AND pwd = :pwd");
	$query->bindParam(":uname", $uname);
	$query->bindParam(":pwd", $pwd);
    $result = ($query->execute()) or die ("Verification error");
	$query->setFetchMode(PDO::FETCH_ASSOC);
    $array = $query->fetch();
    
    if ($array['uname'] == $uname){
        $_SESSION['uname'] = $uname;
        header("Location: home.php");
    }
    
    else{
    	echo '<script language="javascript">';
        echo 'alert("Incorrect username or password")';
        echo '</script>';
        echo '<meta http-equiv="refresh" content="0;url=index.php" />';
    }


?>
