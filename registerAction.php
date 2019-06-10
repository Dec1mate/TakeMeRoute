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
$pass=$_POST['pass'];
$nombre=$_POST['nombre'];
$dni=$_POST['dni'];

$pass = password_hash($pass, PASSWORD_DEFAULT);
$consulta = "insert into usuarios values (?,?,?,0,2.5,CURRENT_DATE,?,0,0) ";
$result = $PDO->prepare($consulta);
$result->execute([$dni,$nombre,$rutaDestino,$pass]);

echo "<script>alert('Su cuenta será revisada por un administrador, en breves estará activa')</script>";
echo "<script>location.href='index.php'</script>";
?>