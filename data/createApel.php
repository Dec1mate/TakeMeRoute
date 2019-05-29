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
        session_start();
        if (isset($_SESSION['username']) == true) {
            include "headerRegistered.php";
        } else {
            include "header.php";
        }
        ?>
    </div>
    <div class="row ">
        <div class="offset-1 col-10 text-center">
            <div class="container">
                <div class="row mt-5 p-0">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="dni">Usuario</label>
                            </div>
                            <input readonly value="<?=$_SESSION['banned']?>" class="form-control" name="dni" id="dni" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="mensaje">Mensaje</label>
                            </div>
                            <textarea class="form-control" name="mensaje" id="mensaje"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offset-1 mt-5 col-10">
            <input id="boton" class="btn btn-success w-100" type="button" value="Enviar apelación">
        </div>
    </div>
</div>
</div>
</body>
<script>
    document.getElementById("boton").onclick = function () {
        let dni=document.getElementById("dni").value;
        let mensaje=document.getElementById("mensaje").value;

        location.href="enviarApel.php?dni="+dni+"&mensaje="+mensaje;
    }
</script>
</html>