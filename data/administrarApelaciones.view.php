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
        include "top6.php";
        ?>
    </div>
    <div class="row m-0">
        <div class="col-12 text-center">
            <div class="container">
                <div class="row mt-3">
                    <div class="col-10">
                        <div style="font-size: 150%; background-color: #6C757D; color: white;border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);">
                           APELACIONES
                        </div>
                    </div>
                    <div id="back" class="col-2 btn-dark mb-4" style="font-size: 150%; color: white;border-radius: 10px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);">
                        Volver atrás
                    </div>

                </div>
            </div>
            <div class="container p-0 m-0">
                <div class="row mt-3 mb-2 justify-content-between">
            <?php for ($j = 0; $j < count($apelaciones); $j++): ?>
                    <div class="col-5 mb-3">
                        <div class="container">
                            <div class="row" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);">
                                <div class="col-6 " style="background-color: darkgrey ">
                                    <div class="container p-2" >
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="<?=$apelaciones[$j]->foto?>" width="100%" style="border-radius: 10px">
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <?php
                                            for ($i = 0; $i < 5; $i++) {
                                                if ($i < (int)$apelaciones[$j]->estrellas) {
                                                    echo "<div class='col-2 p-0 m-auto'><img src='./img/estrella.png' style='width: 100%'></div>";
                                                } else {
                                                    echo "<div class='col-2 p-0 m-auto'><img src='./img/estrellaapagada.png' style='width: 100%'></div>";
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-12">
                                                <?=$apelaciones[$j]->nombre?>
                                                <br>
                                                Viajes: <?=$apelaciones[$j]->viajes?>
                                                <br>
                                                Reservas: <?=$apelaciones[$j]->reservas?>
                                                <br>
                                                Coches: <?=$apelaciones[$j]->coches?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6  p-4" style="background-color: lightgrey">
                                    <?=$apelaciones[$j]->mensaje?>
                                    <div class="container p-0">
                                    <div class="row mt-5">
                                        <div class="aceptar col-12 w-100 btn btn-success mb-2" style="height: 60px; font-size: 200%">
                                            ACEPTAR
                                            <input type="hidden" value="<?=$apelaciones[$j]->dni?>/<?=$apelaciones[$j]->id?>">
                                        </div>
                                        <div class="rechazar col-12 w-100 btn btn-danger " style="height: 60px;font-size: 200%">
                                            RECHAZAR
                                            <input type="hidden" value="<?=$apelaciones[$j]->dni?>/<?=$apelaciones[$j]->id?>">
                                        </div>
                                    </div>
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
</div>
</body>
<script>
document.getElementById("back").onclick=function () {
    location.href="adminProf.php";
}
let rechazar=document.getElementsByClassName("rechazar");

for(let i=0;i<rechazar.length;i++) {
    rechazar[i].onclick=function (event) {
        let aux=event.target.getElementsByTagName("input")[0].value;
        aux=aux.split("/");
        let dni=aux[0];
        let id=aux[1];
        location.href="rechazarApel.php?dni="+dni+"&id="+id;

    }
}

let aceptar=document.getElementsByClassName("aceptar");

for(let i=0;i<aceptar.length;i++) {
    aceptar[i].onclick=function (event) {
        let aux=event.target.getElementsByTagName("input")[0].value;
        aux=aux.split("/");
        let dni=aux[0];
        let id=aux[1];
        location.href="aceptarApel.php?dni="+dni+"&id="+id;

    }
}

</script>
</html>