<?php
session_start();
if (isset($_SESSION['username'])) {
	include ('Chat.php');
	$chat = new Chat();
	$user = $chat->loginUsers($_SESSION['username']);
	$_SESSION['userid'] = $user[0]['userid'];
	$chat->updateUserOnline($user[0]['userid'], 1);
	$lastInsertId = $chat->insertUserLoginDetails($user[0]['userid']);
	$_SESSION['login_details_id'] = $lastInsertId;

	header("location:index.php");
} else {
		echo "Usted no debería estar aquí";
}
?>






