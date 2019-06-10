<?php
session_start();
include "comprobarAdmin.php";
require_once "Database/Connection.php";
$dni=$_SESSION['username'];

//DATOS USUARIO
$PDO = Connection::Make();
$result=$PDO->prepare("select * from usuarios where dni=?");
$result->execute([$dni]);
$conductor=$result->fetchAll(PDO::FETCH_ASSOC);

$conductor=json_encode($conductor);
$conductor=json_decode($conductor);


//PETICIONES DE REGISTRO
$result=$PDO->prepare("select * from usuarios where aceptado=0 and banned=0 limit 5");
$result->execute();
$peticiones=$result->fetchAll(PDO::FETCH_ASSOC);

$peticiones=json_encode($peticiones);
$peticiones=json_decode($peticiones);


//NUMERO DE VIAJES
$result=$PDO->prepare("select count(*) from conduce where conductor=?");
$result->execute([$dni]);
$viajes=$result->fetch(PDO::FETCH_UNIQUE)[0];

$viajes=json_encode($viajes);
$viajes=json_decode($viajes);

include "adminProf.view.php";
?>