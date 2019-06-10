<?php
require_once "Database/Connection.php";
$dni=$_GET['nombre'];

//DATOS USUARIO
$PDO = Connection::Make();
$result=$PDO->prepare("select * from usuarios where dni=?");
$result->execute([$dni]);
$conductor=$result->fetchAll(PDO::FETCH_ASSOC);

$conductor=json_encode($conductor);
$conductor=json_decode($conductor);

//NUMERO DE VIAJES
$result=$PDO->prepare("select count(*) from conduce where conductor=?");
$result->execute([$dni]);
$viajes=$result->fetch(PDO::FETCH_UNIQUE)[0];

$viajes=json_encode($viajes);
$viajes=json_decode($viajes);


//COCHES DEL USUARIO
$result=$PDO->prepare("select * from coches where conductor=?");
$result->execute([$dni]);
$coches=$result->fetchAll(PDO::FETCH_ASSOC);

$coches=json_encode($coches);
$coches=json_decode($coches);

//RUTAS DEL USUARIO
$result=$PDO->prepare("select * from conduce c, rutas r where c.conductor=? and c.nombre=r.nombre");
$result->execute([$dni]);
$rutas=$result->fetchAll(PDO::FETCH_ASSOC);

$rutas=json_encode($rutas);
$rutas=json_decode($rutas);

include "mostrarConductor.php";
?>