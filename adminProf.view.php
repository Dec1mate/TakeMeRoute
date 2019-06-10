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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<style>
    .datitos {
        border: solid black 0.2vw;
        background: url("./img/paisaje-carretera.jpg") center;
        background-size: cover;
        color: white;
        text-shadow: -1px -1px 3px #000;
    }

    .texto{
        font-size: 60%;
    }

    .person {
        background: url("./img/83431611-concepto-de-tecnología-abstracta-futurista-fondo-gris-.png") center;
        background-size: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
        color: black;
        border: solid black 0.15vw;
    }
    .top3{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
        border: solid black 0.2vw;
        background: url("./img/top6.jpg") center;
        background-size: cover;
    }

    .garage{
        background-size: cover ;
        height: 350px;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
    }

    .rutas{
        background: url('./img/anyadirRuta.jpg') center;
        background-size: cover ;
        height: 250px;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
    }
     .carousel-item{
         object-fit: cover;
     }
    .slideshow{
        overflow: hidden;
    }
    .peticion{
        background-color: lightgrey;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.4);
        border-radius: 10px;
    }
</style>
<body>
<div class="container mt-3">
    <div class="row justify-content-between mt-2">
        <div class="col-7">
            <div class="container p-0">
                <div class="row justify-content-around">
                    <div id="ruta" class="col-5 rutas text-center slideshow p-0 " style=" object-fit: cover; background: url('./img/anyadirRuta.jpg') center; background-size: cover">
                        <p style="background-color: rgba(255,255,255,0.6); padding: 5%;">Administrar Rutas</p>
                    </div>
                    <div id="usuarios" class="col-5 rutas text-center slideshow p-0" style=" object-fit: cover; background: url('./img/administrarUsuarios.jpg') center; background-size: cover">
                        <p style="background-color: rgba(255,255,255,0.8); padding: 5%;">Administrar Usuarios</p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div id="apelaciones" class="col-5 rutas text-center slideshow p-0 mt-4 mb-2" style=" object-fit: cover; background: url('./img/administrarDatos.jpg') center; background-size: cover">
                        <p style="background-color: rgba(255,255,255,0.8); padding: 5%;">Administracion de Apelaciones</p>
                    </div>
                    <div id="mensaje" class="col-5 rutas text-center slideshow p-0 mt-4 mb-2" style=" object-fit: cover; background: url('./img/administrarMensajes.jpg') center; background-size: cover">
                        <p style="background-color: rgba(255,255,255,0.6); padding: 5%;">Administrar Mensajes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="container datitos">
                            <div class="row">
                                <div class="col-8" style="font-size: 200%">
                                    <?= $conductor[0]->nombre ?>
                                    <br>
                                    Viajes: <?= $viajes ?>
                                </div>
                                <div class="col-4 foto p-0 mb-3">
                                    <img src="<?= $conductor[0]->foto ?>" width="100%" style="border-radius: 0 0 0 20px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.8);">
                                </div>
                            </div>
                            <div class="row">
                                <?php
                                for ($i = 0; $i < 5; $i++) {
                                    if ($i < (int)$conductor[0]->estrellas) {
                                        echo "<div class='col-2 p-0 m-auto'><img src='./img/estrella.png' style='width: 100%'></div>";
                                    } else {
                                        echo "<div class='col-2 p-0 m-auto'><img src='./img/estrellaapagada.png' style='width: 100%'></div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="p-2 mt-2" style="background-color: #6C757D; color: white;border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);">
                            Peticiones de registro
                        </div>
                </div>
                <div class="row" style="padding: 6.9%">
                    <?php for($j=0;$j<count($peticiones);$j++):?>
                        <div class="col-12 peticion">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3 mt-1 mb-1"><img class="m-1" src='<?=$peticiones[$j]->foto?>' width="100%"></div>
                                    <div class="col-6"><?=$peticiones[$j]->nombre?></div>
                                    <div class="offset-1 col-1">
                                        <a href="aceptarUsuario.php?dni=<?=$peticiones[$j]->dni?>">
                                        <i class="fas fa-check"></i>
                                        </a>
                                    </div>
                                    <div class="col-1">
                                        <a href="rechazarUsuario.php?dni=<?=$peticiones[$j]->dni?>">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                    <div class="col-12 mt-3">
                        <input id="logoff" type="button" class="btn btn-danger" value="Log Off" style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    document.getElementById("mensaje").onclick=function () {
        location.href="./chat/login.php";
    }

    document.getElementById("ruta").onclick=function () {
        location.href="./administrarRutasAdmin.php";
    }

    document.getElementById("apelaciones").onclick=function () {
        location.href="./administrarApelaciones.php";
    }

    document.getElementById("usuarios").onclick=function () {
        location.href="./administrarUsuarios.php";
    }

    document.getElementById("logoff").onclick=function () {
        location.href="./logoff.php";
    }
</script>
</html>