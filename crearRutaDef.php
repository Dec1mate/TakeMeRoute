<?php

session_start();
require_once "Database/Connection.php";
$dni = $_SESSION['username'];
$ruta=$_GET['ruta'];
$coche=$_GET['coche'];
$fecha=$_GET['fecha'];
$gasolina=$_GET['gasolina'];
$PDO = Connection::Make();

$result = $PDO->prepare("select plazas from coches where matricula=?");
$result->execute([$coche]);
$plazas=$result->fetchAll(PDO::FETCH_ASSOC);


$result = $PDO->prepare("insert into conduce values (0, ?, ?, ?, ?, 1, ?,?)");
$result->execute([$coche, $dni, $fecha, $ruta, $plazas[0]['plazas'],$gasolina]);



header("location: administrarRutas.php")


?>