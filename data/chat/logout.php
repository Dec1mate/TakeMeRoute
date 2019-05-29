<?php 
session_start();
include ('Chat.php');
$chat = new Chat();
$chat->updateUserOnline($_SESSION['userid'], 0);
$_SESSION['userid']  = "";
$_SESSION['login_details_id']= "";
if($_SESSION['username']=="11111111A") {
    header("Location:../adminProf.php");
} else {
    header("Location:../myProfile.php");
}

?>






