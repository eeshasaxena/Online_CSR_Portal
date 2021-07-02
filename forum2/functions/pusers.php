<?php
include("pconfig.php");
echo "<h2>Users</h2>";
echo "<div class='user'>".$_SESSION['username']."</div>";
echo "<div class='user'>".$_SESSION['recipient']."</div>";
?>