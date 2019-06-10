<?php

require_once "Database/Connection.php";

$PDO = Connection::Make();
$result=$PDO->prepare("select * from usuarios where banned!=1 order by estrellas DESC limit 6");
$result->execute();
$top6=$result->fetchAll(PDO::FETCH_ASSOC);
$top6=json_encode($top6);
$top6=json_decode($top6);

$count=[];
for($i=0;$i<count($top6);$i++) {
    $result=$PDO->prepare("select count(*) from conduce where conductor=?");
    $result->execute([$top6[$i]->dni]);
    $count[]=$result->fetch(PDO::FETCH_UNIQUE)[0];

}

?>
