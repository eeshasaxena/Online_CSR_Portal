<?php
include "db.php";

extract($_POST);

	$password = md5($password);

$sql = $con->prepare("INSERT INTO `tbluser`(`fname`, `lname`, `gender`) VALUES (:fname,:lname,:gender)");
$sql->bindParam(":fname", $fname);
$sql->bindParam(":lname", $lname);
$sql->bindParam(":gender", $gender);

$result = $sql->execute();

 if($result)
	{
		$sql1 = $con->prepare("SELECT * FROM `tbluser` WHERE `fname` = :fname");
	    $sql1->bindParam(":fname", $fname);
	    $a = $sql1->execute();
	 	$sql1->setFetchMode(PDO::FETCH_ASSOC);
		$aa = $sql1->fetch();
		
		if($a)
		{
			$aaa = $aa['user_Id'];
			$sql2 = $con->prepare("INSERT INTO `tblaccount`(`username`, `password`, `user_Id`) VALUES(:username,:password,:aaa)");
			$sql2->bindParam(":username", $username);
			$sql2->bindParam(":password", $password);
			$sql2->bindParam(":aaa", $aaa);
			$res = $sql2->execute();
			
			if($res==true)
                            {
                                    echo '<script language="javascript">';
                                    echo 'alert("Successfully Registered")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
                            }

		}
			
		
	}




?>