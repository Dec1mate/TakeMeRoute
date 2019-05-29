<?php

session_start();
require_once "Database/Connection.php";

$datos=json_decode($_POST["datos"]);
$PDO = Connection::Make();
$result = $PDO->prepare("update usuarios set estrellas=(estrellas+?)/2 where dni=?");
$result->execute([ $datos->estrellas,  $datos->usuario]);

$mensaje="Hola, la ruta ya ha terminado, visita este link para valorar al conductor. <a href='../valoraConductor.php?conductor=".$_SESSION['username']."&id=".$datos->id."'>Valora al conductor</a>";
$PDO = Connection::Make();
$result = $PDO->prepare("insert into chat values(0, ?, ?, ?, CURRENT_TIMESTAMP, 1)");
$result->execute([ "11111111A",  $datos->usuario, $mensaje]);



?>