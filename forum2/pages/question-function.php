<?php

include "../functions/db.php";
date_default_timezone_set("Asia/Kolkata");
$datetime=date("Y-m-d h:i:sa");
                        
extract($_POST);
$sql = $con->prepare("INSERT INTO tblpost(title,content, cat_id,datetime,user_Id) VALUES (:title,:content,:category,:datetime,:userid)");
$sql->bindParam(":title", $title);
$sql->bindParam(":content", $content);
$sql->bindParam(":category", $category);
$sql->bindParam(":datetime", $datetime);
$sql->bindParam(":userid", $userid);
$res = $sql->execute();

if($res==true)
                            {
                                   echo '<script language="javascript">';
                                    echo 'alert("Posted Successfully!")';
                                    echo '</script>';
                                    echo '<meta http-equiv="refresh" content="0;url=home.php" />';
                            }


?>