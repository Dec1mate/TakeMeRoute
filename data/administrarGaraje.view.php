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
    <div class="row">
        <div class="offset-1 col-10 text-center">
            GARAJE
            <?php for ($j = 0; $j < count($progress); $j++): ?>
                <div class="container p-0 m-0">
                    <div class="row mt-3 mb-1 mt-1">
                        <div class="col-7 ruta"
                             style="background: url('<?= $progress[$j]->photo ?>')  center;background-size: cover;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                        </div>
                        <div class="col-5 textodos p-1"
                             style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                            <div style='font-size: 80%; height: 30vh; border-radius: 10px;' class="datitos texto mt-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 text-center mb-1" style="font-size: 120%">
                                            <?= $progress[$j]->marca." ".$progress[$j]->modelo?>
                                        </div>
                                    </div>
                                </div>
                                <div style='margin-bottom: 5%;' class="mt-5 ml-2">
                                    Matricula: <?= $progress[$j]->matricula?>
                                    <br>
                                    <br>
                                    Cavallos: <?= $progress[$j]->cv?>
                                    <br>
                                    <br>
                                    Plazas: <?= $progress[$j]->plazas?>
                                    <br>
                                    <br>
                                    <a href="eliminarCoche.php?matricula=<?= $progress[$j]->matricula?>"><input type="button" class="btn btn-danger m-2" value="Eliminar" style="float: right;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="row p-0">
                <div class="offset-3 col-6 mb-4">
                    <a href="crearCoche.php" id="registrarCoche" class="perfil pl-3 pr-3 btn btn-info w-100 mt-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                        Registrar un coche
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>

</script>
</html>