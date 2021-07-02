<?php
  session_start();
  if (isset($_SESSION['username'])&&$_SESSION['username']!=""){
  }
  else
  {
    header("Location:../index.php");
  }
$username=$_SESSION['username'];
$userid = $_SESSION['user_Id'];

?>
<html>
<head>
	<title></title>

	<!--Custom CSS-->
	<link rel="stylesheet" type="text/css" href="../css-old/global.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="../css-old/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css-old/bootstrap.min.css">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--style-->
        /*.clicked{
        background-image: url("../images/like_clicked.jpg");
        width:20px;
        height:20px;
        background-repeat:no-repeat;
        }

        .unclicked{
        background-image: url("like_unclicked.jpg");
        width:20px;
        height:20px;
        background-repeat:no-repeat;
        }

        .clickedc{
            background-image: url("../images/like_clickedc.jpg");
            width:20px;
            height:20px;
            background-repeat:no-repeat;
        }

        .unclickedc{
            background-image: url("like_unclickedc.jpg");
            width:20px;
            height:20px;
            background-repeat:no-repeat;
        }*/
    <!--/style-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        function like(str) {
            //$(this).classList.toggle("unclicked");
            this.src = "../images/like_clicked.jpg";
            window.location.href=window.location.href;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('no_likes').innerHTML=this.responseText;
                }
            };
            xhttp.open("GET", "../functions/like.php?val="+str, true);
            xhttp.send();
        }
        function unlike(str) {
            //$(this).classList.toggle("clicked");
            this.src = "../images/like_unclicked.jpg";
            window.location.href = window.location.href;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('no_likes').innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "../functions/unlike.php?val="+str, true);
            xhttp.send();
        }
        function likec(str1, str2) {
            //$(this).classList.toggle("unclickedc");
            this.src = "../images/like_clickedc.jpg";
            window.location.href=window.location.href;
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('no_likesc').innerHTML=this.responseText;
                }
            };
            xhttp.open("GET", "../functions/likec.php?val1="+str1+"&val2="+str2, true);
            xhttp.send();
        }
        function unlikec(str1, str2) {
            //$(this).classList.toggle("clickedc");
            window.location.href=window.location.href;
            this.src = "../images/like_unclickedc.jpg";
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('no_likesc').innerHTML=this.responseText;
                }
            };
            xhttp.open("GET", "../functions/unlikec.php?val1="+str1+"&val2="+str2, true);
            xhttp.send();
        }
    </script>
</head>
<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="home.php"></a>
            </div>
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">DISCUSSION FORUM</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#quest"> Post a Question</a></li>
                </ul>
     				 <ul class="nav navbar-nav navbar-right">
				 <ul class="nav navbar-nav navbar-right">
                         <li><a href="profile.php" ><span class="glyphicon glyphicon-user"></span> <?php echo $username;?></a></li>
                        <li ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                
                </ul>   
               
                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container" style="margin:7% auto;">
    	<h4>Latest Discussion</h4>
    	<hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Programming</h3>
                </div> 
                 <div class="panel-body">


                 <?php

                include "../functions/db.php";
                     $id = $_GET['post_id'];
                     
                
                $sql = $con->prepare("SELECT * from tblpost as tp join category as c on tp.cat_id=c.cat_id where tp.post_Id=:id ");
				$sql->bindParam(":id", $id);
				$res = $sql->execute();
				$sql->setFetchMode(PDO::FETCH_ASSOC);
                if($res==true){
                  while($row=$sql->fetch()){
                    extract($row);
					$literal_admin=0;
                    if($user_Id==$literal_admin){
                       echo "<label>Topic Title: </label> ".$title."<br>";
                       echo "<label>Topic Category: </label> ".$category."<br>";
                       echo "<label>Date time posted: </label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo "<label>Posted By: </label> Admin";
                    }
                    else{
                      $sel = $con->prepare("SELECT * from tbluser where user_Id=:user_Id ");
					  $sel->bindParam(":user_Id", $user_Id);
					  $sel->execute();
					  $sel->setFetchMode(PDO::FETCH_ASSOC);
                      while($row=$sel->fetch()){
                        extract($row);
                        echo "<label>Topic Title:&nbsp</label> ".$title."<br>";
                       echo "<label>Topic Category:&nbsp</label> ".$category."<br>";
                       echo "<label>Date time posted:&nbsp</label> ".$datetime;
                       echo "<p class='well'>".$content."</p>";
                       echo '<label>Posted By:&nbsp</label>'.$fname.' '.$lname;
                       $query = $con->prepare("SELECT count(*) as `likes` from tbllikepost where user_Id=:user_Id and post_Id=:post_Id");
                       $query->bindParam(":user_Id", $userid);
                       $query->bindParam(":post_Id", $post_Id);
                       $query->execute();
                       $qres = $query->fetch();
                       extract($qres);
                          if ($likes==0) {
                              echo "<br>";
                              echo "<img src='../images/like_unclicked.jpg' id='like_unclicked' height='24' width='24' onclick=like('$post_Id')>";
                          }
                          else if ($likes>0) {
                              echo "<br>";
                              echo "<img src='../images/like_clicked.jpg' id='like_clicked' height='24' width='24' onclick=unlike('$post_Id')>";
                          }
                       $query2 = $con->prepare("SELECT count(user_Id) as `total_likes` from tbllikepost where post_Id=:post_Id");
                       $query2->bindParam("post_Id", $post_Id);
                       $query2->execute();
                       $qres2 = $query2->fetch();
                       extract($qres2);
                       echo "<label id='no_likes'>&nbsp&nbsp&nbsp&nbspLikes :&nbsp".$total_likes."</label>";
                       //echo "<meta http-equiv='refresh' content='0;url=content.php?post_id=".$post_Id." '/>";
                      }
                      
                    }
                    
         
                }
                }
                
              
                    
              ?>

              <br><label>Comments</label><br>
              <div id="comments">
              <?php 
              $postid= $_GET['post_id'];
              $sql = $con->prepare("SELECT * from tblcomment as c join tbluser as u on c.user_Id=u.user_Id where post_Id=:postid order by datetime");
			  $sql->bindParam(":postid", $postid);
			  $sql->execute();
			  $sql->setFetchMode(PDO::FETCH_ASSOC);
              $num = $sql->rowCount();
              if($num>0){
              while($row=$sql->fetch()){
                  echo "<label>Comment by: </label> ".$row['fname']." ".$row['lname']."<br>";
                  echo '<label class="pull-right">'.$row['datetime'].'</label>';
                  echo "<p class='well'>".$row['comment']."</p>";
                  $postidx = $row['post_Id'];
                  $commentidx = $row['comment_Id'];
                  $query = $con->prepare("SELECT count(*) as `likesc` from tbllikecomment where user_Id=:user_Id and post_Id=:post_Id and comment_Id=:comment_Id");
                  $query->bindParam(":user_Id", $userid);
                  $query->bindParam(":post_Id", $row['post_Id']);
                  $query->bindParam(":comment_Id", $row['comment_Id']);
                  $query->execute();
                  $qres = $query->fetch();
                  extract($qres);
                  if ($likesc==0) {
                      echo "<img src='../images/like_unclickedc.jpg' id='like_unclickedc' height='19' width='19' onclick=likec(".$postidx.",".$commentidx.")>";
                  }
                  else if ($likesc>0) {
                      echo "<img src='../images/like_clickedc.jpg' id='like_clickedc' height='19' width='19' onclick=unlikec(".$postidx.",".$commentidx.")>";
                  }
                  $query2 = $con->prepare("SELECT count(user_Id) as `total_likesc` from tbllikecomment where post_Id=:post_Id and comment_Id=:comment_Id");
                  $query2->bindParam("post_Id", $row['post_Id']);
                  $query2->bindParam("comment_Id", $row['comment_Id']);
                  $query2->execute();
                  $qres2 = $query2->fetch();
                  extract($qres2);
                  echo "<label id='no_likesc'>&nbsp&nbsp&nbsp&nbspLikes :&nbsp".$total_likesc."</label>";
              }

            }

              ?>
            </div>
              </div>
          </div>
          <hr>
            <div class="col-sm-5 col-md-5 sidebar">
          <h3>Comment</h3>
          <form method="POST">
            <textarea type="text" class="form-control" id="commenttxt"></textarea><br>
            <input type="hidden" id="postid" value="<?php echo $_GET['post_id']; ?>">
            <input type="hidden" id="userid" value="<?php echo $_SESSION['user_Id']; ?>">
            <input type="submit" id="save" class="btn btn-success pull-right" value="Comment">
          </form>
        </div>
    </div>

    <div class="my-quest" id="quest">
        <div>
            <form method="POST" action="question-function.php">

                <label>Category</label>
                <select name="category" class="form-control">
                    <option></option>
                    <?php $sel = $con->prepare("SELECT * from category");
                    $res = $sel->execute();
                    $sel->setFetchMode(PDO::FETCH_ASSOC);

                    if($res==true){
                        while($row=$sel->fetch()){
                            extract($row);
                            echo '<option value='.$cat_id.'>'.$category.'</option>';
                        }
                    }
                    ?>
                </select>
                <label>Topic Title</label>
                <input type="text" class="form-control" name="title"required>
                <label>Content</label>
                <textarea name="content"class="form-control">
                        </textarea>
                <br>
                <input type="hidden" name="userid" value=<?php echo $userid; ?>>
                <input type="submit" class="btn btn-success pull-right" value="Post">
            </form><br>
            <hr>
            <a href="" class="pull-right">Close</a>
        </div>
    </div>
</body>
<script>

$("#save").click(function(){
var postid = $("#postid").val();
var userid = $("#userid").val();
var comment = $("#commenttxt").val();
var datastring = 'postid=' + postid + '&userid=' + userid + '&comment=' + comment;
if(!comment){
  alert("Please enter some text comment");
}
else{
  $.ajax({
    type:"POST",
    url: "../functions/addcomment.php",
    data: datastring,
    cache: false,
    success: function(result){
      document.getElementById("commenttxt").value=' ';
      $("#comments").append(result);
    }
  });
}
return false;
})

</script>
</html>