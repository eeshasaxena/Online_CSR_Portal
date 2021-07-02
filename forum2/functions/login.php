<?php
if(isset($_SESSION['username']) && !isset($display_case)){
    $name=htmlspecialchars($_SESSION['username']);
    $sql=$dbh->prepare("SELECT name FROM chatters WHERE name=?");
    $sql->execute(array($name));
    if($sql->rowCount()!=0){
        $ermsg="<script language='javascript'>alert('Some error occured!');</script>";
    }else{
        $sql=$dbh->prepare("INSERT INTO chatters (name,seen) VALUES (?,NOW())");
        $sql->execute(array($name));
        $_SESSION['user']=$name;
    }
}else{
        $ermsg="<script language='javascript'>alert('Some error occured!');</script>";
        echo $ermsg;
        echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
    }
?>