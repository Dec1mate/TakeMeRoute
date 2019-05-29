<?php
require_once "Database/Connection.php";

//Rutas no terminadas

$PDO = Connection::Make();
$result=$PDO->prepare("update coches set deleted=1 where matricula=?");
$result->execute([$_GET['matricula']]);


header("location: administrarGaraje.php");
?>