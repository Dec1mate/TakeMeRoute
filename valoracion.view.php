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
    <div class="row">
        <div class="col-12 top6 mb-2">
            <div class="container text-center">
                <!--FOREACH DEL TOP6-->
                <div class="row pt-1">
                    <div class="col-12" style="color: black; font-size: 120% ">Pasajeros</div>
                </div>
                <div class="row justify-content-around p-3">
                    <?php for($j=0;$j<count($usuarios);$j++):?>
                        <div class="col-3 person">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="offset-2 col-8 foto mt-1" >
                                        <img src="<?= $usuarios[$j]->foto?>" width="100%" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 texto mt-1" >
                                        <?= $usuarios[$j]->nombre?>
                                        <br>
                                        Viajes: <?= $count[$j]?>

                                        <input class="nombre" type="hidden" value="<?=$usuarios[$j]->dni?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <?php
                                    for ($i=1;$i<6;$i++){
                                        echo "<div class='col-2 p-0 m-auto'><img id='$i' class='estrellas hvr-grow' src='./img/estrellaapagada.png' style='width: 100%'></div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php endfor;?>
                </div>
                <div class="row">
                    <div class="offset-3 col-6 mb-4">
                        <a id="finalizar" class="pl-3 pr-3 btn btn-dark w-100 mt-4" style="color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);">
                            Finalizar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
let k=document.getElementsByClassName("estrellas");

for(let i=0;i<k.length;i++) {
    k[i].onmouseover=function (event) {
        let ll=event.target.parentElement.parentElement;
        ll=ll.getElementsByClassName("estrellas");
        for(let j=0;j<event.target.id;j++) {
            ll[j].src="./img/estrella.png";
        }
    }
}
for(let i=0;i<k.length;i++) {
    k[i].onmouseout=function (event) {
        let ll=event.target.parentElement.parentElement;
        ll=ll.getElementsByClassName("estrellas");
        for(let j=0;j<event.target.id;j++) {
            ll[j].src="./img/estrellaapagada.png";
        }
    }
}
for(let i=0;i<k.length;i++) {
    k[i].onclick=function (event) {
        let ll=event.target.parentElement.parentElement;
        ll=ll.getElementsByClassName("estrellas");
        for(let j=0;j<5;j++) {
            ll[j].onmouseover=null;
            ll[j].onmouseout=null;
        }
    }
}

document.getElementById("finalizar").onclick=function () {
    let j=document.getElementsByClassName("nombre");
    for(let i=0;i<j.length;i++) {
        let estrellas=j[i].parentElement.parentElement.parentElement.getElementsByClassName("estrellas");
        let cont=0;
        for(let m=0;m<estrellas.length;m++) {
            if(estrellas[m].src=="http://localhost/proyecto/nuevo/img/estrella.png") {
                cont++;
            }
        }
        let httpRequest=new XMLHttpRequest();
        httpRequest.open("POST","valoraUsuario.php",true);
        httpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        httpRequest.onreadystatechange=function(){
            if (httpRequest.readyState==4) {
                if (httpRequest.status==200){
                    if(i==j.length-1){
                        location.href="myProfile.php";
                    }
                }
            }
        }
        httpRequest.send('datos={"id":"<?=$_GET["id"]?>", "fecha":"<?=$_GET["fecha"]?>", "usuario":"'+j[i].value+'", "estrellas":"'+cont+'"}');

    }
}
</script>
</html>




