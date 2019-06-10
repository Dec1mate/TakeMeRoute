<?php
require_once "Database/Connection.php";


$nombre=$_GET['nombre'];
$PDO = Connection::Make();
$result=$PDO->prepare("update rutas set aceptada=1 where nombre=?");
$result->execute([$nombre]);

header("location: administrarRutasAdmin.php");