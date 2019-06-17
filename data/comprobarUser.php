<?php
include "Database/Connection.php";
session_start();

$datos=$_POST['datos'];
$datos=json_decode($datos);


$PDO = Connection::Make();
$result=$PDO->prepare("select * from usuarios where dni=?");
$result->execute([$datos->dni]);
$conductor=$result->fetchAll(PDO::FETCH_ASSOC);

$conductor=json_encode($conductor);
$conductor=json_decode($conductor);

$pass=$datos->pass;
$passar=$conductor[0]->pass;
$comprobar="false";
    if($conductor[0]->banned==true) {
        $comprobar="banned";
        $_SESSION['banned'] = $datos->dni;
    } else {
        if(isset($conductor[0]) && $conductor[0]->aceptado==false) {
            $comprobar="noAceptado";
        } else {
            if(password_verify($pass,$passar)) {
                $comprobar="true";
                if (password_needs_rehash($passar, PASSWORD_DEFAULT)) {
                    $pass = password_hash($pass, PASSWORD_DEFAULT);
                    $consulta = "UPDATE Arbitros SET Pass = ? WHERE Codigo=? ";
                    $result = $PDO->prepare($consulta);
                    $result->execute([$datos->dni, $pass]);
    
                }
                $_SESSION['username'] = $datos->dni;
            }
        }
    }
    
echo $comprobar;
?>

