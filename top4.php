<?php

$PDO = Connection::Make();
$result=$PDO->prepare("select * from conduce c, rutas r, coches co where c.estado !=0 AND r.nombre=c.nombre AND co.matricula=c.matricula order by fecha_conduce LIMIT 2");
$result->execute();
$top4=$result->fetchAll(PDO::FETCH_ASSOC);
$top4=json_encode($top4);
$top4=json_decode($top4);
?>