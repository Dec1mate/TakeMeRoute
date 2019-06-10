<?php
$tipo = $_FILES['foto']['type'];
$nombre = $_FILES['foto']['name'];
$rutaDestino = "./img/rutas/".$nombre;
if (!((strpos($tipo, "jpg") || strpos($tipo, "jpeg")))) {
} else {
    if (is_file($rutaDestino) === true) {
        $idUnico = time();
        $nombre = $idUnico . '_' . $nombre;
        $rutaDestino = $rutaDestino . $nombre;
    }
}
move_uploaded_file($_FILES['foto']['tmp_name'], $rutaDestino);


require_once "Database/Connection.php";
$PDO = Connection::Make();
$result = $PDO->prepare("insert into rutas values (?,?, 0)");
$result->execute([$_POST['nombre'], $rutaDestino]);

echo "<script>alert('Su ruta será revisada por un administrador, en breves estará activa')</script>";
echo "<script>location.href='administrarRutas.php'</script>";
?>