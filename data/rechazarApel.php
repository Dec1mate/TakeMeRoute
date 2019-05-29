<?php
require_once "Database/Connection.php";

$id=$_GET['id'];
$PDO = Connection::Make();
$result=$PDO->prepare("update apelaciones set estado=1 where id=?");
$result->execute([$id]);

header("location: administrarApelaciones.php");