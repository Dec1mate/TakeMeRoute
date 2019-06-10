<?php
require_once "Database/Connection.php";

$PDO = Connection::Make();
$result=$PDO->prepare("select * from conduce c, rutas r, coches co where c.nombre=r.nombre and co.matricula=c.matricula and estado!=0");
$result->execute();
$rutas=$result->fetchAll(PDO::FETCH_ASSOC);

$rutas=json_encode($rutas);
$rutas=json_decode($rutas);

include "mostrarRutas.php";
if(isset($_SESSION['username'])) include "./js/scripts.html";

?>
