<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css" >
    <link rel="stylesheet" href="css/main.css" >
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>

    <title>Document</title>
</head>
<style>
    .texto {
        background-color: rgba(255, 255, 255, 0.5);
        padding: 10%;
    }

    .rutas {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
        padding: 2%;
    }


    #datitos {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
    }

    .ruta{
        text-align: center;
        border-radius: 10px;

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
        ?>
    </div>
    <div class="row">
        <div class="offset-3 col-6 text-center pt-1" style="border-style: solid solid none solid; border-color: black; color: black; background-color: #EDEDED;position: relative; bottom: -2.4px">
            Rutas Disponibles
        </div>
    </div>
    <div class="row justify-content-around" style="background-color: #EDEDED; border: solid black; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(0, 0, 0, 0.3); ">
        <?php for($j=0;$j<count($rutas);$j++):?>
            <div class="ruta col-3 m-3 p-3 mt-5" style="background: url('<?=$rutas[$j]->foto?>') center; background-size: cover">
                <div style='font-size: 80%; border-radius: 10px;' class="texto datitos mt-3 mb-3 ml-1 mr-1">
                    <div style='margin-bottom: 5%'><?= $rutas[$j]->nombre?></div><br>
                    <div style='margin-bottom: 5%'><a style='color: black;' href='getConductor.php?nombre=<?= $rutas[$j]->conductor?>'>Conductor</a></div>
                    <div style='margin-bottom: 5%'><a style='color: black;' href='https://www.google.com/search?q=<?= $rutas[$j]->modelo?>'>Coche: <?= $rutas[$j]->modelo?></a></div>
                    <div style="margin-bottom: 15%">Gasolina: <?=$rutas[$j]->gasolina?>€</div>
                    <input style='width: 40%; font-size: 80%; float: left;' type='button' value='Maps' class='maps btn btn-info mr-2'>
                    <?php if ($rutas[$j]->estado==1 && isset($_SESSION['username'])==true) {
                        echo "<input id='".$rutas[$j]->id."' type='button' style='width: 50%; font-size: 70%' value='Reservar' class='reservar btn btn-dark'>";
                    } else {
                        echo "<input disabled type='button' style='width: 50%; font-size: 70%' value='Reservar' class='reservar btn btn-dark'>";
                    }
                    ?>
                </div>
            </div>


    <?php endfor;?>
    </div>
</div>
</body>
<script>
    let j = document.getElementsByClassName("maps").length;


    for (let k = 0; k < j; k++) {
        document.getElementsByClassName("maps")[k].onclick = mapa;
    }


    function mapa(event) {
        window.open("https://www.google.es/maps/search/"+event.target.parentNode.firstElementChild.innerHTML);
    }
</script>
</html>