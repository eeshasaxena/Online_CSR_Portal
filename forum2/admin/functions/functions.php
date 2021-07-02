<?php


function dbcon(){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "dbforum";

	try {
    	$con = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
    	// set the PDO error mode to exception
    	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	catch(PDOException $e)
    	{
    	die("Connection failed: " . $e->getMessage());
    	}
}

function dbclose(){
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$db = "dbforum";

	try {
    	$con = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
    	// set the PDO error mode to exception
    	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
	catch(PDOException $e)
    	{
    	die("Connection failed: " . $e->getMessage());
    	}
	
	$con = null;
}

function deleteuser($user_Id){
	dbcon();
	$sql = $con->prepare("DELETE from tbluser where user_Id=:user_Id ");
	$sql->bindParam(":user_Id", $user_Id);
	$sel = $sql->execute();

	if($sel==true){
		$del = $con->prepare("DELETE from tblacct where user_Id=:user_Id ");
		$del->bindParam(":user_Id", $user_Id);
		$del->execute();
			echo "success";
		
	}
	else{
		echo "failed";
	}

	dbclose();
}

function category(){
	dbcon();
	$sql = $con->prepare("SELECT * from category");
	$sel = $sql->execute();
	$sql->setFetchMode(PDO::FETCH_ASSOC);

	if($sel==true){
		while($row=$sql->fetch()){
			extract($row);
			echo '<option value='.$cat_id.'>'.$category.'</option>';
		}
	}


	dbclose();
}

?>