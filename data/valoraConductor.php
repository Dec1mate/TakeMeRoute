<?php

session_start();
require_once "Database/Connection.php";

$datos=$_GET["conductor"];
$PDO = Connection::Make();
$result = $PDO->prepare("select * from usuarios where dni=?");
$result->execute([$datos]);
$conductor=$result->fetchAll(PDO::FETCH_ASSOC);
$conductor=json_encode($conductor);
$conductor=json_decode($conductor);

$PDO = Connection::Make();
$result = $PDO->prepare("select * from reservas where id=? and pasajero=?");
$result->execute([$_GET['id'], $_SESSION['username']]);
$reserva=$result->fetchAll(PDO::FETCH_ASSOC);
$reserva=json_encode($reserva);
$reserva=json_decode($reserva);


if(isset($reserva[0]->valorada)) {

    if($reserva[0]->valorada==0) {
        include "valoraConductor.view.php";
    } else {
        header("location: myProfile.php");
    }
} else {
    header("location: myProfile.php");
}
?>