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
                           USUARIOS
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
                                                <br>
                                                Estado: <?php
                                                if($apelaciones[$j]->banned==true) {
                                                    echo "Baneado";
                                                } elseif($apelaciones[$j]->aceptado==false){
                                                        echo "Por aceptar";
                                                    } else {
                                                        echo "Activo";
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6  p-4" style="background-color: lightgrey">
                                    <div class="container p-0">
                                    <div class="row ">
                                        <?php
                                        if($apelaciones[$j]->banned==true) {?>
                                            <div class="unban col-12 w-100 btn btn-success" style="font-size: 200%">
                                                    Desbanear
                                                    <input type="hidden" value="<?=$apelaciones[$j]->dni?>">
                                                 </div>
                                        <?php } elseif($apelaciones[$j]->aceptado==false) {?>
                                          <div class="activar col-12 w-100 btn btn-info" style="font-size: 200%">
                                                    Activar cuenta
                                                    <input type="hidden" value="<?=$apelaciones[$j]->dni?>">
                                                 </div>
                                            <?php } else { ?>
                                            <div class="ban col-12 w-100 btn btn-danger" style="font-size: 200%">
                                                    BAN HAMMER
                                                    <input type="hidden" value="<?=$apelaciones[$j]->dni?>">
                                                 </div>
                                        <?php } ?>
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
let ban=[];
let unban=[];
let activar=[];

if(document.getElementsByClassName("ban")) {
    ban=document.getElementsByClassName("ban");
}

if(document.getElementsByClassName("unban")) {
    unban=document.getElementsByClassName("unban");
}

if(document.getElementsByClassName("activar")) {
    activar = document.getElementsByClassName("activar");
}

for(let i=0;i<ban.length;i++) {
    ban[i].onclick=function (event) {
        let aux=event.target.getElementsByTagName("input")[0].value;
        location.href="banearUsuario.php?dni="+aux;

    }
}

for(let i=0;i<unban.length;i++) {
    unban[i].onclick=function (event) {
        let aux=event.target.getElementsByTagName("input")[0].value;
        location.href="desbanearUsuario.php?dni="+aux;

    }
}

for(let i=0;i<activar.length;i++) {
    activar[i].onclick=function (event) {
        let aux=event.target.getElementsByTagName("input")[0].value;
        location.href="aceptarUsuario2.php?dni="+aux;
    }
}

</script>
</html>