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
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!--Script-->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
 
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
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
                <a class="navbar-brand" href="../../home.html">CSR GATEWAY</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#quest"> Post a Question</a></li>
                </ul>
     				
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
                    $sel1 = $con->prepare("SELECT * from tblpost where cat_id=:cat_id ");
					$sel1->bindParam(":cat_id", $cat_id);
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