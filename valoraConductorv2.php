<?php

session_start();
require_once "Database/Connection.php";

$datos=json_decode($_POST["datos"]);
$PDO = Connection::Make();
$result = $PDO->prepare("update usuarios set estrellas=(estrellas+?)/2 where dni=?");
$result->execute([ $datos->estrellas,  $datos->conductor]);

$PDO = Connection::Make();
$result = $PDO->prepare("update reservas set valorada=1, valoracion=? where id=? and pasajero=?");
echo $datos->id;
$result->execute([$datos->estrellas, $datos->id, $_SESSION['username']]);






?>