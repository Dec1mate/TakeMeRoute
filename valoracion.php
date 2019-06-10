<?php
session_start();

require_once "Database/Connection.php";

$PDO = Connection::Make();

$result=$PDO->prepare("update conduce set estado=0 where id=?");
$result->execute([$_GET['id']]);


$result=$PDO->prepare("select u.nombre, u.foto, u.dni from reservas r, conduce c, usuarios u where c.id=? and c.id=r.id and u.dni=r.pasajero");
$result->execute([$_GET['id']]);
$usuarios=$result->fetchAll(PDO::FETCH_ASSOC);

$usuarios=json_encode($usuarios);
$usuarios=json_decode($usuarios);
include "valoracion.view.php";
