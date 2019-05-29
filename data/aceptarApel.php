<?php
require_once "Database/Connection.php";


$dni=$_GET['dni'];
$id=$_GET['id'];
$PDO = Connection::Make();
$result=$PDO->prepare("update usuarios set banned=0 where dni=?");
$result->execute([$dni]);

$PDO = Connection::Make();
$result=$PDO->prepare("update apelaciones set estado=1 where id=?");
$result->execute([$id]);

header("location: administrarApelaciones.php");