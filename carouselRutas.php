<style>
    .carousel-item{
        object-fit: cover;
    }
    .carousel-inner > .item > img {
        margin: 0 auto;
    }
</style>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php for($i=0;$i<count($rutas);$i++):?>
            <?php if($i==0) {
                echo "<div class=\"carousel-item active\">".
                    "<div style='display: block; color: black;font-weight: 600; text-shadow: -1px -1px 3px white; border-radius: 10px; width: 40%; height: 45%;position: absolute; font-size: 140%; background: rgba(255,255,255,0.6);top: -30px; left: 50%;transform: translate(-50%,0)'>".
                    "<br>".
                    "Modelo: ".$rutas[$i]->nombre."<br>".
                    "Plazas disp: ".$rutas[$i]->plazas;
                if(isset($_SESSION['username'])==true) {
                    echo "<br><br><input id='".$rutas[$i]->id."' type='button' style='width: 50%; font-size: 100%' value='Reservar' class='reservar btn btn-dark'>";
                } else {
                    echo "<br><br><input disabled type='button' style='width: 50%; font-size: 100%' value='Reservar' class='btn btn-dark'>";
                }
                echo "</div><img src=\"".$rutas[$i]->foto."\" class=\"d-block w-100\" alt = \"...\"></div>";
            } else {
                echo "<div class=\"carousel-item\">".
                    "<div style='display: block; color: black;font-weight: 600; text-shadow: -1px -1px 3px white; border-radius: 10px; width: 40%; height: 70%;position: absolute; font-size: 140%; background: rgba(255,255,255,0.6);top: -30px; left: 50%;transform: translate(-50%,0)'>" .
                    "<br>".
                    "Modelo: ".$rutas[$i]->nombre."<br>".
                    "Plazas disp: ".$rutas[$i]->plazas;
                if(isset($_SESSION['username'])==true) {
                    echo "<br><br><input id='".$rutas[$i]->id."' type='button' style='width: 50%; font-size: 100%' value='Reservar' class='reservar btn btn-dark'>";
                } else {
                    echo "<br><br><input disabled type='button' style='width: 50%; font-size: 100%' value='Reservar' class='btn btn-dark'>";
                }
                echo "</div><img src=\"".$rutas[$i]->foto."\" class=\"d-block w-100\" alt = \"...\" ></div>";
            }
            ?>
        <?php endfor; ?>
    </div>
</div>
