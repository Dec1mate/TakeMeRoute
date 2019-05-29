<?php

$PDO = Connection::Make();
$result=$PDO->prepare("select * from reservas r, conduce c, usuarios u where c.conductor=? AND r.id=c.id AND u.dni =r.pasajero order by r.fecha DESC");
$result->execute([$_SESSION['username']]);
$reservas=$result->fetchAll(PDO::FETCH_ASSOC);
$reservas=json_encode($reservas);
$reservas=json_decode($reservas);
$top3=[];
if(isset($reservas[0])) $top3[0]=$reservas[0];
if(isset($reservas[1])) $top3[1]=$reservas[1];
if(isset($reservas[2])) $top3[2]=$reservas[2];


$result=$PDO->prepare("select * from coches where conductor=?");
$result->execute([$_SESSION['username']]);
$coches=$result->fetchAll(PDO::FETCH_ASSOC);
$coches=json_encode($coches);
$coches=json_decode($coches);

$result=$PDO->prepare("select * from conduce where conductor=? AND estado!=0");
$result->execute([$_SESSION['username']]);
$rutas=$result->fetchAll(PDO::FETCH_ASSOC);
$rutas=json_encode($rutas);
$rutas=json_decode($rutas);





?>
