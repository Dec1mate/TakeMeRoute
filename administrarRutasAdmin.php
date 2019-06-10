<?php
session_start();
include "comprobarAdmin.php";

require_once "Database/Connection.php";
$dni=$_SESSION['username'];

//Rutas no terminadas

$PDO = Connection::Make();
$result=$PDO->prepare("select ru.nombre, ru.foto from rutas ru where aceptada=0");
$result->execute([$dni]);
$progress=$result->fetchAll(PDO::FETCH_ASSOC);

$progress=json_encode($progress);
$progress=json_decode($progress);


include_once "administrarRutasAdmin.view.php"

?>