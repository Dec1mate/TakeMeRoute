<?php
require_once "Database/Connection.php";

$dni=$_GET['dni'];
$PDO = Connection::Make();
$result=$PDO->prepare("update usuarios set banned=1 where dni=?");
$result->execute([$dni]);

header("location: administrarUsuarios.php");