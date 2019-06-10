<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<style>

    .textodos {
        border-radius: 0 10px 10px 0;
        background-color: whitesmoke;
        color: black;
    }

    .ruta {
        border-radius: 10px 0 0 10px;

    }
    .rutas{
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
    }
</style>

<body>
<div class="container">
    <div class="row align-items-center">
        <?php
        if (isset($_SESSION['username']) == true) {
            include "headerRegistered.php";
        } else {
            include "header.php";
        }
        include "top6.php";
        ?>
    </div>
    <div class="row m-0">
        <div class="col-9 text-center">
            <div class="p-1" style="background-color: #6C757D; color: white;border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);">
                RUTAS EN PROCESO
            </div>

            <?php for ($j = 0; $j < count($progress); $j++): ?>
                <div class="container p-0 m-0">
                    <div class="row mt-3 mb-1 mt-1">
                        <div class="col-7 ruta"
                             style="background: url('<?= $progress[$j]->foto ?>')  center;background-size: cover;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                        </div>
                        <div class="col-5 textodos p-1"
                             style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                            <div style='font-size: 80%; height: 30vh; border-radius: 10px;' class="datitos texto mt-3">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-12 text-center mb-1">
                                            PASAJEROS
                                        </div>
                                    </div>
                                    <div class="row justify-content-around align-content-center mb-1 mt-1"
                                         style="background-color: whitesmoke; padding: 2%">
                                        <?php for ($o = 0; $o < $progress[$j]->plazas; $o++): ?>
                                        <?php if($o%3==0) echo "<div class='w-100'></div>"?>
                                            <?php if (isset($progress[$j]->pasajeros[$o])) { ?>
                                                <div class="col-3 person">
                                                    <div class="container p-0 align-content-center">
                                                        <div class="row ">
                                                            <div class="offset-9 col-1">
                                                                <a id="eliminar" class="close mb-1" aria-label="Close" href="eliminarPasajero.php?nombre=<?= $progress[$j]->pasajeros[$o]->dni ?>&id=<?= $progress[$j]->id ?>">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="offset-1 col-10 foto mt-0">
                                                                <img src="<?= $progress[$j]->pasajeros[$o]->foto ?>"
                                                                     width="100%"
                                                                     style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.4);">
                                                            </div>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-12 texto mt-1">
                                                                <?= $progress[$j]->pasajeros[$o]->nombre ?>
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-around">
                                                            <?php
                                                            for ($i = 0; $i < 5; $i++) {
                                                                if ($i < (int)$progress[$j]->pasajeros[$o]->estrellas) {
                                                                    echo "<div class='col-2 p-0 m-auto'><img src='./img/estrella.png' style='width: 100%'></div>";
                                                                } else {
                                                                    echo "<div class='col-2 p-0 m-auto'><img src='./img/estrellaapagada.png' style='width: 100%'></div>";
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } else { ?>
                                                <div class="col-3 person">
                                                    <div class="container p-0">
                                                        <div class="row ">
                                                            <div class="offset-9 col-1">
                                                                <button type="button" class="close mb-1" aria-label="Close" style="visibility: hidden">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="offset-1 col-10 foto mt-0">
                                                                <img src="./img/default-user-profile.jpg"
                                                                     width="100%"
                                                                     style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.4);">
                                                            </div>
                                                        </div>
                                                        <div class="row text-center">
                                                            <div class="col-12 texto mt-1">
                                                                Vacante
                                                                <br>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-around">
                                                            <?php
                                                            for ($i = 0; $i < 5; $i++) {
                                                                echo "<div class='col-2 p-0 m-auto'><img src='./img/estrellaapagada.png' style='width: 100%'></div>";
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                                <div style='margin-bottom: 5%;' class="mt-2 ml-2">
                                    <?= $progress[$j]->nombre." ".$progress[$j]->fecha_conduce?>
                                    <div><a style='color: black;'
                                            href='https://www.google.com/search?q=<?= $progress[$j]->marca . " " . $progress[$j]->modelo ?>'>Coche: <?= $progress[$j]->marca . " " . $progress[$j]->modelo ?></a>
                                    </div>
                                    Gasolina: <?=$progress[$j]->gasolina?>€
                                    <br>
                                    <a href="valoracion.php?id=<?= $progress[$j]->id?>&fecha=<?=$progress[$j]->fecha_conduce?>"><input type="button" class="btn btn-dark m-2" value="Terminar" style="float: right;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="row p-0">
                <div class="offset-3 col-6 mb-4">
                    <a id="crearRuta" class="perfil pl-3 pr-3 btn btn-info w-100 mt-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                        Crear una nueva ruta
                    </a>
                </div>
            </div>
        </div>
        <div class="offset-1 col-2 text-center">
            <div class="p-1" style="background-color: #6C757D; color: white;border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);">
                RESERVAS ACTIVAS
            </div>
            <div class="container mt-2">
                <?php for ($j = 0; $j < count($reservas); $j++): ?>
                    <div class="row mb-3">
                        <div class="col-12 rutas">
                            <div class="container  m-0">
                                <div class="row">
                                    <div class="offset-11 col-1">
                                        <a id="eliminarReserva" class="close mb-1" aria-label="Close" href="eliminarReserva.php?fecha=<?= $reservas[$j]->fecha?>&id=<?= $reservas[$j]->id?>&pasajero=<?=$_SESSION['username']?>">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="offset-1 col-10 mb-1">
                                        <img src="<?=$reservas[$j]->foto?>" width="100%" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.4)">
                                    </div>
                                </div>
                                <div class="row">
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        if ($i < (int)$reservas[$j]->estrellas) {
                                            echo "<div class='col-2 p-0 m-auto'><img src='./img/estrella.png' style='width: 100%'></div>";
                                        } else {
                                            echo "<div class='col-2 p-0 m-auto'><img src='./img/estrellaapagada.png' style='width: 100%'></div>";
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="row">
                                    <div class="offset-1 col-10 mb-2 mt-2">
                                        <?=$reservas[$j]->fecha_conduce?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mb-2 text-center">
                                        <?=$reservas[$j]->ruta_nombre?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
</body>
<script>
document.getElementById("crearRuta").onclick=function () {
    location.href="crearRuta.php";
}
</script>
</html>