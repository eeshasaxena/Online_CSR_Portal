<?php
		include "db.php";
        $comment = $_POST['comment'];
        $userid = $_POST['userid'];
        $postid = $_POST['postid'];
        date_default_timezone_set("Asia/Kolkata");
        $datetime=date("Y-m-d h:i:sa");
        $cmnt = $con->prepare("Insert into tblcomment (comment,post_Id,user_Id,datetime) values (:comment,:postid,:userid,:datetime)");
		$cmnt->bindParam(":comment", $comment);
		$cmnt->bindParam(":postid", $postid);
		$cmnt->bindParam(":userid", $userid);
		$cmnt->bindParam(":datetime", $datetime);
		$cmnt->execute();
        $sql = $con->prepare("SELECT * from tblcomment as c join tbluser as u on c.user_Id=u.user_Id where post_Id=:postid and c.user_Id=:userid and c.datetime=:datetime");
		$sql->bindParam(":postid", $postid);
		$sql->bindParam(":userid", $userid);
		$sql->bindParam(":datetime", $datetime);
		$sql->execute();
		$sql->setFetchMode(PDO::FETCH_ASSOC);

	 while($row = $sql->fetch()){
                    echo "<label>Comment by: </label> ".$row['fname']." ".$row['lname']."<br>";
                     echo '<label class="pull-right">'.$row['datetime'].'</label>';
                     echo "<p class='well'>".$row['comment']."</p>";
              }



?>