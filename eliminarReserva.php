<?php
require_once "Database/Connection.php";

//Rutas no terminadas

$PDO = Connection::Make();
$result=$PDO->prepare("delete from reservas where pasajero=? and fecha=? and id=?");
$result->execute([$_GET['pasajero'], $_GET["fecha"], $_GET["id"]]);

$PDO = Connection::Make();
$result=$PDO->prepare("update conduce set plazas=plazas+1 where id=?");
$result->execute([$_GET["id"]]);


header("location: administrarRutas.php");
?>