
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Document</title>
</head>
<style>
    .slideshow{
        height: 250px;
        overflow: hidden;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
        border: solid black 0.2vw;
        background-size: cover;

    }
    .estrella{
        background: url("/img/estrella.png");
    }
    .container{
        padding: 0;
        margin: 0;
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
    .top6{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
        border: solid black 0.2vw;
        background: url("./img/top6.jpg") center;
        background-size: cover;
    }

    .textodos{
        border-radius: 0 10px 10px 0;
        background-color: lightgrey;
        color: black;
        font-size: 70%;
    }
    .ruta{
        border-radius: 10px 0 0 10px;

    }
    .rutas{
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8), 0 6px 20px 0 rgba(0, 0, 0, 0.8);
    }

</style>
<body>
<div class="container ">
    <div class="row align-items-center">
        <?php
        session_start();
        if (isset($_SESSION['username']) == true) {
            include "headerRegistered.php";
        } else {
            include "header.php";
        }
        include "top6.php";
        include "top4.php";
        ?>
    </div>
    <div class="row">
        <div class="col-7">
            <div class="container p-0 m-0">
                <div class="row">
                    <div class="col-12 slideshow p-0 mb-2">
                        <?php include "carousel.php"; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 top6 mb-2">
                        <div class="container text-center">
                            <!--FOREACH DEL TOP6-->
                            <div class="row pt-1">
                                <div class="col-12" style="color: white; ">MEJORES CONDUCTORES</div>
                            </div>
                            <div class="row justify-content-between p-3">
                                <?php for($j=0;$j<count($top6);$j++):?>
                                    <?php
                                    if($j==3) {
                                        echo "</div><div class=\"row justify-content-between p-3\">";
                                    }
                                    ?>
                                    <div class="col-3 person">
                                        <div class="container p-0">
                                            <div class="row">
                                                <div class="offset-2 col-8 foto mt-1" >
                                                    <img src="<?= $top6[$j]->foto?>" width="100%" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 texto mt-1" >
                                                    <?= $top6[$j]->nombre?>
                                                    <br>
                                                    Viajes: <?= $count[$j]?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <?php
                                                for ($i=0;$i<5;$i++){
                                                    if($i<(int)$top6[$j]->estrellas) {
                                                        echo "<div class='col-2 p-0 m-auto'><img src='./img/estrella.png' style='width: 100%'></div>";
                                                    } else {
                                                        echo "<div class='col-2 p-0 m-auto'><img src='./img/estrellaapagada.png' style='width: 100%'></div>";
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="row justify-content-around">
                                                <div class="col-12 text-center mb-2 mt-2">
                                                    <a class="perfil pl-3 pr-3 btn btn-primary" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);" href="getConductor.php?nombre=<?=$top6[$j]->dni?>">
                                                        Perfil
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-5 text-center conjunto">
            <div class="p-1 aux" style="background-color: #6C757D; color: white;border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);">
                PROXIMAS RUTAS
            </div>

            <div class="container mt-1 p-0">
                <div class="row justify-content-between p-3">
                    <?php for($j=0;$j<count($top4);$j++):?>
                        <div class="col-12 rutas">
                            <div class="container p-0 m-0">
                                <div class="row">
                                    <div class="col-7 ruta" style="background: url('<?=$top4[$j]->foto?>') center;background-size: cover">
                                    </div>
                                    <div class="col-5 textodos">
                                        <div style='font-size: 80%; height: 30vh; border-radius: 10px;' class="datitos texto mt-3">
                                            <div style='margin-bottom: 5%'>
                                                <?= $top4[$j]->nombre?>
                                            </div>
                                            <br>
                                            <div style='margin-bottom: 5%'><a style='color: black;' href='getConductor.php?nombre=<?= $top4[$j]->conductor?>'>Conductor</a></div>
                                            <div style='margin-bottom: 5%'><a style='color: black;' href='https://www.google.com/search?q=<?= $top4[$j]->marca." ".$top4[$j]->modelo?>'>Coche: <?= $top4[$j]->marca." ".$top4[$j]->modelo?></a></div>
                                            <div style='margin-bottom: 10%'>Gasolina: <?=$top4[$j]->gasolina?>€</div>
                                            <input style='width: 40%; font-size: 100%; float: left;' type='button' value='Maps' class='maps btn btn-info mr-2'>
                                            <?php if ($top4[$j]->estado==1 && isset($_SESSION['username'])==true) {
                                                echo "<input id='".$top4[$j]->id."' type='button' style='width: 50%; font-size: 100%' value='Reservar' class='reservar btn btn-dark'></div>";
                                            } else {
                                                echo "<input id='".$top4[$j]->id."' disabled type='button' style='width: 50%; font-size: 100%' value='Reservar' class='reservar btn btn-dark'></div>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                    <div class="row">
                        <div class="col-12">
                            <div id="verMas" class="mt-4 col-12 btn btn-outline-primary">
                                Ver Más
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6 align-content-center">
                            <iframe src="https://open.spotify.com/follow/1/?uri=spotify:user:21u5eu5bzj5wwcjxo6542ok4i&size=detail&theme=light" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                        </div>
                        <div class="col-6 text-center" style="font-size: 96%">
                            Escucha esta playlist mientras conduces
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-1">
                            <iframe class="w-100" src="https://open.spotify.com/embed/user/21u5eu5bzj5wwcjxo6542ok4i/playlist/6HBLLaWbJNldF76U3ezDIG?si=KM30pqN9RDGcFzpHAqEiNg" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include "./js/scripts.html";?>
</body>
<script>

    document.getElementById("verMas").onclick=function () {
        location.href="getRutas.php";
    }

    let j = document.getElementsByClassName("maps").length;


    for (let k = 0; k < j; k++) {
        document.getElementsByClassName("maps")[k].onclick = mapa;
    }


    function mapa(event) {
        window.open("https://www.google.es/maps/search/"+event.target.parentNode.firstElementChild.innerHTML);
    }

</script>

</html>