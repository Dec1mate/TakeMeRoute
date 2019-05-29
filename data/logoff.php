<?php
session_start();
include ('./chat/Chat.php');
$chat = new Chat();
$chat->updateUserOnline($_SESSION['userid'], 0);

session_destroy();
header("location: index.php");
?>