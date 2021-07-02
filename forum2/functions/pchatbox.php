<?php
include("pconfig.php");
if(isset($_SESSION['username']) && isset($_SESSION['recipient'])){
    ?>
    <h2>Room to chat</h2>
    <a style="right: 20px;top: 20px;position: absolute;cursor: pointer;" href="logout.php">Log Out</a>
    <div class='msgs'>
        <?php include("pmsgs.php");?>
    </div>
    <form id="msg_form" method="post" action="psend.php">
        <input name="msg" size="30" type="text"/>
        <button>Send</button>
    </form>
    <?php
}
?>