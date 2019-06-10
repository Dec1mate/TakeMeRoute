<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/hover-min.css">
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<style>
    .div1b{
        z-index: 123242341243;
    }
</style>
<div class="col-3">
    <a href="index.php"><img src="./img/delorean.png" width="100%"></a>
</div>
<div id="Inicio" class="col-2 btn btn-light hvr-underline-from-left" style="text-align: center">Inicio</div>
<div id="Rutas" class="col-2 btn btn-light hvr-underline-from-left" style="text-align: center">Rutas</div>
<div id="sobre" class="col-2 btn btn-light hvr-underline-from-left" style="text-align: center">Mi Perfil</div>
<div class="col-3" style="text-align: right">
    <input id="logoff" style="width: 80%;" type="button" class="btn btn-danger" value="Log Off">
</div>

<script>
    document.getElementById("logoff").onclick=logoff;
    function logoff() {
        location.href="logoff.php";
    }
    document.getElementById("sobre").onclick=function () {
        location.href="myProfile.php";
    }
    document.getElementById("Inicio").onclick = function () {
        location.href = "index.php"
    }
    document.getElementById("Rutas").onclick=function () {
        location.href="getRutas.php";
    }



</script>


