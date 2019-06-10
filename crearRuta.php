<?php

session_start();
require_once "Database/Connection.php";
$dni = $_SESSION['username'];

//Rutas
$PDO = Connection::Make();
$result = $PDO->prepare("select nombre from rutas where aceptada=1");
$result->execute([]);
$rutas = $result->fetchAll(PDO::FETCH_ASSOC);

$rutas = json_encode($rutas);
$rutas = json_decode($rutas);
//Coches
$PDO = Connection::Make();
$result = $PDO->prepare("select * from coches where conductor=?");
$result->execute([$dni]);
$coches = $result->fetchAll(PDO::FETCH_ASSOC);

$coches = json_encode($coches);
$coches = json_decode($coches);





include_once "crearRuta.view.php"


?>