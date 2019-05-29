<?php
session_start();
require_once "Database/Connection.php";
$dni=$_SESSION['username'];

//Rutas no terminadas

$PDO = Connection::Make();
$result=$PDO->prepare("select c.gasolina, c.id, c.fecha_conduce, co.plazas, ru.nombre, ru.foto, co.marca, co.modelo, co.cv from conduce c, rutas ru , coches co where c.estado=1 and ru.nombre=c.nombre and co.matricula=c.matricula and c.conductor=?");
$result->execute([$dni]);
$progress=$result->fetchAll(PDO::FETCH_ASSOC);

$progress=json_encode($progress);
$progress=json_decode($progress);

foreach ($progress as $id) {
    $result=$PDO->prepare("select nombre, foto, estrellas, dni from reservas r, usuarios u where r.id=? and u.dni=r.pasajero");
    $result->execute([$id->id]);
    $pasajero=$result->fetchAll(PDO::FETCH_ASSOC);

    $id->pasajeros=$pasajero;
}
$progress=json_encode($progress);
$progress=json_decode($progress);

$result=$PDO->prepare("select ru.foto fotoRu, u.estrellas, u.foto, co.nombre ruta_nombre, co.fecha_conduce, r.id, co.gasolina, r.fecha from reservas r, conduce co, coches c, usuarios u, rutas ru where ru.nombre=co.nombre and u.dni=co.conductor and r.pasajero=? and r.id=co.id and co.matricula=c.matricula");
$result->execute([$dni]);
$reservas=$result->fetchAll(PDO::FETCH_ASSOC);

$reservas=json_encode($reservas);
$reservas=json_decode($reservas);

include_once "administrarRutas.view.php"

?>