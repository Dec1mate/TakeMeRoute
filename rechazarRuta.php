<?php
require_once "Database/Connection.php";


$nombre=$_GET['nombre'];
$PDO = Connection::Make();
$result=$PDO->prepare("delete from rutas where nombre=?");
$result->execute([$nombre]);

header("location: administrarRutasAdmin.php");