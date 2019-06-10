<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="css/hover-min.css">
<script src="../js/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.js"></script>
<style>
    .formulario{
        position: fixed;
        left: 50%;
        transform: translate(-50%, 0%);
        top: 3.5%;
        border: 1px solid darkgrey;
        padding:20px 0 0 0;
        z-index: 10;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0,0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 400px;
        max-height: 90%;
        text-align: left;
    }
    .formulario p {
        text-align: left;
        margin-left: 75px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .formulario small {
        margin-left: 75px;
    }
    .formulario button {
        margin-left: 90px;
    }
    .formulario input[type=text], .formulario input[type=password] {
        width: 250px;
        margin-left: 75px;
    }
    #divbl {
        height: 100%;
        width: 100%;
        position: fixed;
        background-color: rgba(255, 255, 255, 0.5);
        top: 0;
        left: 0;
    }
    #texto_error {
        color: red;
    }

    .div1b{
        z-index: 123242341243;
    }
</style>
<div class="col-3">
    <a href="index.php"><img src="../img/delorean.png" width="100%"></a>
</div>
<div id="Inicio" class="col-2 btn btn-light hvr-underline-from-left" style="text-align: center">Inicio</div>
<div id="Rutas" class="col-4 btn btn-light hvr-underline-from-left" style="text-align: center">Rutas</div>
<div class="col-1" style="text-align: right">
    <input id="login" type="button" class="btn btn-primary" value="Log In">
</div>
<div class="col-2 " style="text-align: left">
    <input id="register" type="button" class="btn btn-secondary" value="Registrarse">
</div>
<script>
    document.getElementById("Rutas").onclick=function () {
        location.href="getRutas.php";
    }
    document.getElementById("Inicio").onclick = function () {
        location.href = "index.php"
    };
    document.getElementById("login").onclick=login;
    document.getElementById("register").onclick=register;



    function login() {
        let formulario = document.createElement('form');
        formulario.setAttribute('class', 'formulario');
        formulario.setAttribute('action', 'index.php');
        formulario.setAttribute('method', 'post');
        let divbl = document.createElement('div');
        divbl.setAttribute('id', 'divbl');
        let parrafo = document.createElement('p');
        let texto = document.createTextNode("Iniciar Sesion");
        parrafo.appendChild(texto);
        document.body.appendChild(divbl);
        document.body.appendChild(formulario);
        let p1 = document.createElement('p');
        let text_p1 = document.createTextNode('DNI');
        p1.appendChild(text_p1);
        let input1 = document.createElement('input');
        input1.id="dni";
        input1.setAttribute('type', 'text');
        input1.setAttribute('class', 'form-control');
        input1.setAttribute('name', 'li_email');
        let small1 = document.createElement('small');
        small1.setAttribute('id', 'emailHelp');
        small1.setAttribute('class', 'form-text text-muted');

        let p2 = document.createElement('p');
        let text_p2 = document.createTextNode('Contraseña');
        p2.appendChild(text_p2);
        let input2 = document.createElement('input');
        input2.id="pass";
        input2.setAttribute('type', 'password');
        input2.setAttribute('class', 'form-control');
        input2.setAttribute('name', 'li_pass');
        let small2 = document.createElement('small');
        small2.setAttribute('id', 'passwHelp');
        small2.setAttribute('class', 'form-text text-muted');

        let boton1 = document.createElement('button');
        boton1.setAttribute('type', 'button');
        boton1.setAttribute('class', 'btn btn-success mt-4 mb-4 mr-2');
        boton1.id="iniciar";
        let texto_b1 = document.createTextNode("Iniciar sesion");
        boton1.appendChild(texto_b1);
        let boton2 = document.createElement('button');
        boton2.setAttribute('type', 'button');
        boton2.setAttribute('class', 'cancelar btn btn-secondary mt-4 mb-4 ml-2');
        let texto_b2 = document.createTextNode("Cancelar");
        boton2.appendChild(texto_b2);
        formulario.appendChild(p1);
        formulario.appendChild(input1);
        formulario.appendChild(small1);
        formulario.appendChild(p2);
        formulario.appendChild(input2);
        formulario.appendChild(small2);
        formulario.appendChild(boton1);
        formulario.appendChild(boton2);
        document.body.appendChild(divbl);
        document.body.appendChild(formulario);
        document.getElementById("iniciar").onclick = comprobarForm;
        document.getElementsByClassName('cancelar')[0].onclick = cerrarForm;

        document.body.onkeyup=function (event) {
            if(event.key=="Enter") {
                comprobarForm();
            } else {
                if(event.key=="Escape") {
                    cerrarForm();
                }
            }
        }
    }

    function register() {
        location.href="register.php";
    }

    
    function cerrarForm() {
        document.body.removeChild(document.getElementsByClassName("formulario")[0]);
        document.body.removeChild(document.getElementById('divbl'));

    }

    function comprobarForm() {
        let httpRequest = new XMLHttpRequest();
        httpRequest.open("POST", "comprobarUser.php", true);
        httpRequest.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        httpRequest.onreadystatechange = function () {
            if (httpRequest.readyState == 4) {
                if (httpRequest.status == 200) {
                    if(httpRequest.responseText=="true") {
                        alert("Inicio de sesion correcto");
                        if(document.getElementById("dni").value=="11111111A") {
                            location.href="adminProf.php";
                        } else{
                            location.href="myProfile.php";
                        }

                    } else {
                        if(httpRequest.responseText=="false") {
                            alert("Usuario o contraseña incorrectos");
                            location.href = "index.php";
                        } else {
                            if(httpRequest.responseText=="banned") {
                                alert("Usuario baneado, si deseas poner una apelación cliquee en el boton ok");
                                location.href = "createApel.php";
                            } else {
                                alert("Usuario en espera a ser validado");
                                location.href = "index.php";
                            }
                        }
                    }
                }
            }
        }
        httpRequest.send('datos={"dni":"'+document.getElementById("dni").value+'" , "pass":"'+document.getElementById("pass").value+'"}')
    }
    document.getElementById("sobre").onclick=function () {
        location.href="aboutUs.php";
    }


</script>


