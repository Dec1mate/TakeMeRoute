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
    <form action="crearCocheDef.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="offset-1 col-10">
                <div class="container">
                    <div class="row mt-5 p-0">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="marca">Marca</label>
                                </div>
                                <input id="marca" name="marca" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="modelo">Modelo</label>
                                </div>
                                <input id="modelo" name="modelo" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="matricula">Matrícula</label>
                                </div>
                                <input id="matricula" name="matricula" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="cv">Cavallos</label>
                                </div>
                                <input id="cv" name="cv" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="plazas">Plazas</label>
                                </div>
                                <input id="plazas" name="plazas" type="text" class="form-control">
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
                    </div>
                </div>
            </div>
            <div class="offset-1 mt-5 col-10">
                <a href="crearCocheDef.php"><input disabled id="boton" class="btn btn-success w-100" type="submit" value="Subir Coche"></a>
            </div>
        </div>
    </form>
</div>
</div>
</body>
<script>
let inputs=document.getElementsByClassName("form-control");
for (let i=0;i<inputs.length;i++) {
    inputs[i].onblur=function () {
        let vacio=false;
        let inputsdos=document.getElementsByClassName("form-control");
        for(let j=0;j<inputs.length;j++) {
            if(inputsdos[j].value=="") {
                vacio=true;

            }
        }
        if(vacio==false) {
            document.getElementById("boton").disabled=false;
        }
    }
}
</script>
</html>