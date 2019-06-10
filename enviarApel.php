<?php
require_once "Database/Connection.php";

$dni=$_GET['dni'];
$mensaje=$_GET['mensaje'];



$PDO = Connection::Make();

$result=$PDO->prepare("select * from apelaciones where dni=? and estado=0");
$result->execute([$dni]);
$aux=$result->fetchAll(PDO::FETCH_ASSOC);

if(isset($aux[0])) {
    echo "<script>alert('Ya tiene una apelación enviada, no sea impaciente')</script>";
    echo "<script>location.href='logoff.php'</script>";
} else {
    $result=$PDO->prepare("insert into apelaciones values(0,?,?,0)");
    $result->execute([$dni, $mensaje]);
    echo "<script>alert('Apelacion enviada con éxito, espere a ser desbaneado')</script>";
    echo "<script>location.href='logoff.php'</script>";
}



