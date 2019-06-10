<?php
session_start();
require_once "Database/Connection.php";
$dni=$_SESSION['username'];

//Rutas no terminadas

$PDO = Connection::Make();
$result=$PDO->prepare("select * from coches where conductor=? and deleted!=1");
$result->execute([$dni]);
$progress=$result->fetchAll(PDO::FETCH_ASSOC);

$progress=json_encode($progress);
$progress=json_decode($progress);

include_once "administrarGaraje.view.php"

?>