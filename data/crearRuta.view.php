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
<link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
<script src="js/datepicker.min.js"></script>
<script src="js/i18n/datepicker.es.js"></script>

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
    <div class="row ">
        <div class="offset-1 col-7 text-center">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Ruta</label>
                            </div>
                            <select class="custom-select" id="ruta">
                                <option selected disabled>Opciones...</option>
                                <option disabled>------</option>
                                <?php foreach ($rutas as $ruta): ?>
                                    <option value="<?= $ruta->nombre ?>"><?= $ruta->nombre ?></option>
                                <?php endforeach; ?>
                            </select>

                        </div>
                    </div>
                    <div class=" col-5">
                        <a href="añadirNuevaRuta.php"><input class="btn btn-dark" type="button"
                                                             value="Crear una nueva ruta"></a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Coche</label>
                            </div>
                            <select class="custom-select" id="coche">
                                <option selected disabled>Opciones...</option>
                                <option disabled>------</option>
                                <?php foreach ($coches as $coche): ?>
                                    <option value="<?= $coche->matricula ?>"><?= $coche->marca ?>
                                        &nbsp;<?= $coche->modelo ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class=" col-5">
                        <a href="crearCoche.php"><input class="btn btn-dark" type="button"
                                                         value="Añadir un nuevo coche"></a>
                    </div>
                </div>
                <div class="row mt-5 p-0">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="gasolina">Gasolina</label>
                            </div>
                            <input type="text" class="form-control" name="gasolina" id="gasolina">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-1 mt-2">
            <div id="calendario" class="datepicker-here" data-language='es'></div>
        </div>
        <div class="offset-1 mt-5 col-10">
            <input id="boton" class="btn btn-success w-100" type="button" value="Crear Ruta">
        </div>
    </div>
</div>
</div>
</body>
<script>
    document.getElementById("boton").onclick = function () {
        let ruta=document.getElementById("ruta").value;
        let coche=document.getElementById("coche").value;
        let gasolina=document.getElementById("gasolina").value;
        let fecha=document.getElementById("calendario").value;
        let opciones="Opciones...";

        if(fecha==undefined || ruta==opciones || coche==opciones || gasolina==opciones) {
            alert("Campo/campos erróneos");
        } else {
            fecha=fecha.split("/");
            let fechamod=fecha[2]+"-"+fecha[1]+"-"+fecha[0];
            location.href="crearRutaDef.php?ruta="+ruta+"&coche="+coche+"&gasolina="+gasolina+"&fecha="+fechamod;
        }

    }
</script>
</html>