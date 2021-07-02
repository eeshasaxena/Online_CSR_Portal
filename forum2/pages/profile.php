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
$_SESSION['pchatstate']=0;

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
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script>
        function add()
        {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("chat").innerHTML = document.getElementById("chat").innerHTML + this.responseText;
                }
            };
            xhttp.open("GET", "../functions/recipient.php", true);
            xhttp.send();
        }
    </script>
    <script>
        function send_recipient(str) {
            /*console.log("xxx");
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    window.location.href=this.responseText;
                }
            };
            xhttp.open("GET", "../functions/pindex.php?recipient="+str, true);
            xhttp.send();*/
            $.ajax({
                type: 'POST',
                url: '../functions/pindex.php',
                data: {recipient : str},
                success: function() {
                    window.location="../functions/pindex.php";
                }
            });
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
            <a class="navbar-brand" href="home.php">CSIT FORUM</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-left">
                <li><a href="#quest"> Post a Question</a></li>
            </ul>
            <ul id="chat" class="nav navbar-nav navbar-center">
                <li><a href="../functions/index.php">Group Chat</a></li>
                <li><a onclick="add()">Private Chat</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="profile.php" ><span class="glyphicon glyphicon-user"></span> <?php echo $username;?></a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

            </ul>


        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div class="container" style="...">
    <?php include "../functions/db.php";

    $query = $con->prepare("SELECT * from tbluser WHERE user_Id=:user_Id");
    $query->bindParam(":user_Id", $userid);
    $query->execute();
    $result = $query->fetch();
        extract($result);
    echo "<h3>Personal Info</h3><br>";
    echo "<h4>Personal Info</h4><br>";
    echo "<h4><b>Name :&nbsp</b></h4>".$fname."&nbsp".$lname;
    echo "<h4><b>Gender :&nbsp</b></h4>".$gender;
    $query1 = $con->prepare("SELECT count(post_Id) as `no_posts` from tblpost WHERE user_Id=:user_Id");
    $query1->bindParam(":user_Id", $userid);
    $query1->execute();
    $result1 = $query1->fetch();
    echo "<h4><b>Total posts :&nbsp</b></h4>".strval($result1['no_posts']);
    $query2 = $con->prepare("SELECT count(post_Id) as `no_posts_liked` from tbllikepost WHERE user_Id=:user_Id");
    $query2->bindParam(":user_Id", $userid);
    $query2->execute();
    $result2 = $query2->fetch();
    echo "<h4><b>Total posts liked :&nbsp</b></h4>".strval($result2['no_posts_liked']);
    $query3 = $con->prepare("SELECT count(*) as `no_comments_liked` from tbllikecomment WHERE user_Id=:user_Id");
    $query3->bindParam(":user_Id", $userid);
    $query3->execute();
    $result3 = $query3->fetch();
    echo "<h4><b>Total comments liked :&nbsp</b></h4>".strval($result3['no_comments_liked']);
    ?>
</div>
<div class="container" style="margin:7% auto;">
    <h4>Your Posts</h4>
    <hr>
    <?php  include "../functions/db.php";

    $sel = $con->prepare("SELECT * from category");
    $sel->execute();
    $sel->setFetchMode(PDO::FETCH_ASSOC);
    while($row=$sel->fetch()){
        extract($row);
        echo '<div class="panel panel-success">
                    <div class="panel-heading">
                    <h3 class="panel-title">'.$category.'</h3>
                    </div> 
                    <div class="panel-body">
                    <table class="table table-stripped">
                    <tr>
                    <th>Topic title</th>
                    <th>Category</th>
                    <th>Action</th>
                    </tr>';
        $sel1 = $con->prepare("SELECT * from tblpost where cat_id=:cat_id and user_Id=:userid");
        $sel1->bindParam(":cat_id", $cat_id);
        $sel1->bindParam(":userid", $userid);
        $sel1->execute();
        $sel1->setFetchMode(PDO::FETCH_ASSOC);
        while($row1=$sel1->fetch()){
            extract($row1);
            echo '<tr>';
            echo '<td>'.$title.'</td>';
            echo '<td>'.$category.'</td>';
            echo '<td><a href="content.php?post_id='.$post_Id.'"><button class="btn btn-success">View</button></td>';
            echo '</tr>';
        }


        echo '</table>
                    </div>
                </div>';
    }
    ?>
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
</html>