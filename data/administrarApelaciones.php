<?php
session_start();
require_once "Database/Connection.php";
include "comprobarAdmin.php";

$PDO = Connection::Make();
$result=$PDO->prepare("select u.nombre, u.dni, u.foto, u.estrellas, a.mensaje, a.id from apelaciones a, usuarios u where estado=0 and u.dni=a.dni");
$result->execute();
$apelaciones=$result->fetchAll(PDO::FETCH_ASSOC);

$apelaciones=json_encode($apelaciones);
$apelaciones=json_decode($apelaciones);

foreach ($apelaciones as $apelacion) {
    $result=$PDO->prepare("select count(*) from coches where conductor=?");
    $result->execute([$apelacion->dni]);
    $coches=$result->fetch(PDO::FETCH_UNIQUE);
    $apelacion->coches=$coches[0];

    $result=$PDO->prepare("select count(*) from conduce where conductor=?");
    $result->execute([$apelacion->dni]);
    $viajes=$result->fetch(PDO::FETCH_UNIQUE);
    $apelacion->viajes=$viajes[0];

    $result=$PDO->prepare("select count(*) from reservas where pasajero=?");
    $result->execute([$apelacion->dni]);
    $reservas=$result->fetch(PDO::FETCH_UNIQUE);
    $apelacion->reservas=$reservas[0];
}
$apelaciones=json_encode($apelaciones);
$apelaciones=json_decode($apelaciones);

include "administrarApelaciones.view.php"
?>