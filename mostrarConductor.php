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
        include "top3.php"
        ?>
    </div>
    <div class="row justify-content-between mt-2">
        <div class="col-7">
            <div class="container p-0">
                <div class="row justify-content-around">
                    <div class="col-12 garage text-center slideshow p-0" style=" object-fit: cover; background: url('./img/anyadirCoche.jpg') center; background-size: cover">
                                <?php if(isset($coches[0])==true){
                                    include "carouselcoches.php";
                                } else {
                                    echo "<div style='display: block;color: black;font-weight: 600; text-shadow: -1px -1px 3px white; border-radius: 10px; width: 60%; height: 22%;position: absolute; font-size: 140%; top: 40%;background: rgba(255,255,255,0.5);left: 50%;transform: translate(-50%,0); z-index: 23452352'>No hay coches en nuestra base de datos</div>";
                                }
                                ?>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-12 rutas text-center slideshow p-0 mt-4 mb-2" style=" object-fit: cover; background: url('./img/anyadirRuta.jpg') center; background-size: cover">
                        <?php if(isset($rutas[0])==true){
                            include "carouselRutas.php";
                        } else {
                            echo "<div style='display: block;color: black;font-weight: 600; text-shadow: -1px -1px 3px white; border-radius: 10px; width: 60%; height: 22%;position: absolute; font-size: 140%; top: 40%;background: rgba(255,255,255,0.5);left: 50%;transform: translate(-50%,0); z-index: 23452352'>No hay rutas en nuestra base de datos</div>";
                        }
                        ?>
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
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="offset-3 col-6 text-center" style="border-style: solid solid none solid; border-color: black; color: white; background-color: #1D3257; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 #1C304C; position: relative; bottom: -2.4px">
                                    Últimos viajeros
                                </div>
                            </div>
                            <div class="row justify-content-around top3 p-3">
                                <?php for($j=0;$j<count($top3);$j++):?>
                                    <div class="col-3 person text-center">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="offset-2 col-8 foto mt-1" >
                                                    <img src="<?= $top3[$j]->foto?>" width="100%" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                                                </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-12 texto mt-1" >
                                                        <?= $top3[$j]->nombre?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <?php
                                                for ($i=0;$i<5;$i++){
                                                    if($i<(int)$top3[$j]->estrellas) {
                                                        echo "<div class='col-2 p-0 m-auto'><img src='./img/estrella.png' style='width: 100%'></div>";
                                                    } else {
                                                        echo "<div class='col-2 p-0 m-auto'><img src='./img/estrellaapagada.png' style='width: 100%'></div>";
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="row justify-content-around">
                                                <div class="col-12 text-center mb-2 mt-2">
                                                    <a class="perfil btn pl-3 pr-3 btn-primary w-100" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);font-size: 70%" href="getConductor.php?nombre=<?=$top3[$j]->dni?>">
                                                        Perfil
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor;?>
                            </div>
                            <div class="row p-0">
                                <div class="col-12">
                                    <a id="verReservas" class="perfil pl-3 pr-3 btn btn-primary w-100 mt-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                                        Ver todas las reservas
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php include "./js/scripts.html";?>
<script>
    document.getElementById("verReservas").onclick=mostrarReservas;

    function mostrarReservas() {
       location.href="getConductor2.php?nombre=<?=$_GET['nombre'];?>";
    }
</script>
</html>