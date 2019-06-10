<?php
session_start();
require_once "Database/Connection.php";
$dni=$_SESSION['username'];

$tipo = $_FILES['foto']['type'];
$nombre = $_FILES['foto']['name'];
$rutaDestino = "./img/coches/".$nombre;
if (!((strpos($tipo, "jpg") || strpos($tipo, "jpeg")))) {
} else {
    if (is_file($rutaDestino) === true) {
        $idUnico = time();
        $nombre = $idUnico . '_' . $nombre;
        $rutaDestino = $rutaDestino . $nombre;
    }
}
move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino);



$PDO = Connection::Make();
$result=$PDO->prepare("insert into coches values(?, ?, ?, ?, ?, ?, ?, 0)");
$result->execute([$_POST['matricula'], $_POST['marca'], $_POST['modelo'], $dni, $_POST['cv'], $_POST['plazas'], $rutaDestino]);


header("location: crearRuta.php");

?>