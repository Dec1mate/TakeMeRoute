<?php
session_start();
require_once "Database/Connection.php";
$dni=$_SESSION['username'];
$id=$_GET['id'];

$PDO = Connection::Make();
$result=$PDO->prepare("select * from reservas where id=?");
$result->execute([$id]);
$reservas=$result->fetchAll(PDO::FETCH_ASSOC);

$result=$PDO->prepare("select count(*) from reservas r, conduce c where r.id=c.id and c.id=?");
$result->execute([$id]);
$count=$result->fetchAll(PDO::FETCH_ASSOC);
$count=$count[0]["count(*)"];

$result=$PDO->prepare("select conductor from conduce where id=?");
$result->execute([$id]);
$conductor=$result->fetchAll(PDO::FETCH_ASSOC);

$result=$PDO->prepare("select conductor from conduce where id=?");
$result->execute([$id]);
$conductor=$result->fetchAll(PDO::FETCH_ASSOC);

$result=$PDO->prepare("select * from conduce where id=?");
$result->execute([$id]);
$rutas=$result->fetchAll(PDO::FETCH_ASSOC);

if($rutas[0]['plazas']>0 || $rutas[0]['estado']!=0) {

    $pasar=true;
    foreach ($reservas as $reserva) {
        if($reserva["pasajero"]==$dni) {
            $pasar=false;
        }
    }
    if($conductor[0]['conductor']==$dni) {
        $pasar=false;
    }
    if($pasar==true) {
        $result=$PDO->prepare("insert into reservas values (?, ?, current_date,0,0)");
        $result->execute([$id, $dni]);

        $result=$PDO->prepare("update conduce set plazas = plazas-1 where id=?");
        $result->execute([$id]);

        echo "<script>alert('Reserva realizada con éxito')</script>";
        echo "<script>location.href='".$_SERVER['HTTP_REFERER']."'</script>";
    } else {
        echo "<script>alert('No se ha podido realizar la reserva debido a que ya hay una con el mismo nombre o eres el dueño de la reserva')</script>";
        echo "<script>location.href='".$_SERVER['HTTP_REFERER']."'</script>";

    }


} else {
    echo "<script>alert('No se ha podido realizar la reserva debido a que las plazas ya están completas')</script>";
    echo "<script>location.href='".$_SERVER['HTTP_REFERER']."'</script>";

}

?>