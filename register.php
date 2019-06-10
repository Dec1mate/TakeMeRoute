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
        include "top6.php";
        ?>
    </div>
    <form action="registerAction.php" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="offset-1 col-10">
            <div class="container">
                <div class="row mt-5 p-0">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Nombre</label>
                            </div>
                            <input id="nombre" name="nombre" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Subir</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="foto" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Elige la foto</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">DNI</label>
                            </div>
                            <input id="dni" name="dni" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Contraseña</label>
                            </div>
                            <input id="pass" name="pass" type="password" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="offset-1 mt-5 col-10">
            <input id="boton" class="btn btn-success w-100" type="submit" value="Registrarse">
        </div>
    </div>
    </form>
</div>
</div>
</body>
<script>
</script>
</html>