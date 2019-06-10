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
        <?php for($i=0;$i<count($coches);$i++):?>
        <?php if($i==0) {
            echo "<div class=\"carousel-item active\">
                    <div style='display: block; color: black;font-weight: 600; text-shadow: -1px -1px 3px white; border-radius: 10px; width: 60%; height: 30%;position: absolute; font-size: 140%; background: rgba(255,255,255,0.6);top: -30px; left: 50%;transform: translate(-50%,0)'>             
                    <br>
                    Modelo: ".$coches[$i]->marca." ".$coches[$i]->modelo."<br>
                    CV: ".$coches[$i]->cv."
                    </div>
                    <img src=\"".$coches[$i]->photo."\" class=\"d-block w-100\" alt=\"...\"></div>";
            } else {
                echo "<div class=\"carousel-item\">
                    <div style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.6); font-weight: 600; text-shadow: -1px -1px 3px white;display: block; color: black; border-radius: 10px; width: 60%; height: 35%;position: absolute; font-size: 140%; background: rgba(255,255,255,0.4);top: -30px; left: 50%;transform: translate(-50%,0); z-index: 235355'>             
                    <br>
                    Modelo: ".$coches[$i]->marca." ".$coches[$i]->modelo."<br>
                    CV: ".$coches[$i]->cv."
                    </div>
                    <img src=\"".$coches[$i]->photo."\" class=\"d-block w-100\" alt=\"...\" style='position: relative; top: -60px'></div>";
            }
            ?>
        <?php endfor; ?>
    </div>
</div>