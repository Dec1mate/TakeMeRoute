<?php

require_once "Database/Connection.php";


echo $_GET['nombre']."-".$_GET['id'];
$PDO = Connection::Make();
$result=$PDO->prepare("delete from reservas where id=? and pasajero=?");
$result->execute([$_GET['id'], $_GET['nombre']]);

$PDO = Connection::Make();
$result=$PDO->prepare("update conduce set plazas=plazas+1 where id=?");
$result->execute([$_GET['id']]);


header("Location: administrarRutas.php");